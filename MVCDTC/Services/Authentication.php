<?php
namespace MVCDTC\Services;

use MVCDTC\Repositories\AccountRepository;

class Authentication{
    public $user = null;
    private AccountRepository $accountRepository;

    function __construct(AccountRepository $accountRepository){
        $this->accountRepository = $accountRepository;
        if(isset($_COOKIE["sessionToken"])) {
            //print "Cookie is set";     

            $result = $this->accountRepository->SearchSession($_COOKIE["sessionToken"]);
            $json = json_decode($result["Payload"], true);

            // You can add a max date check on absolute max date.
            if($result["CreateDate"] + (30*60) > time()){
                ## Still valid renew cookie ##
                $this->CreateNewCookie($json["userId"], $json["guid"]);
                $this->user = $json;
            }
            else{
                ## Expired ##
                $this->Logout();
            }
        }else{
            //print "No cookie with this name";
        }
    }

    public function CreateNewCookie($id, $oldGUID){
        $expires = time() + (30*60);
        $guid;
        if($oldGUID === null){
            $guid = $this->CreateGuid();
        }else{
            $guid = $oldGUID;
        }

        setcookie("sessionToken", $guid, $expires, "/", "localhost", true, true);

        $payload = [
            'guid' => $guid,
            'userId' => $id
        ];

        if($oldGUID == null){
            $this->accountRepository->InsertSession($guid, json_encode($payload), $expires);
        }else{
            $this->accountRepository->UpdateSession(json_encode($payload), $expires, $guid);
        }
    }

    public function Login($user, $password){
        $result = $this->accountRepository->SelectUserByName($user);
        $loginResult = false;

        if($result !== null){
            $loginResult = password_verify($password, $result["Password"]);
        }else{
            ## You run this so this take +- the same time as password verify. Then they cant extrapoled that user doesnt exist ##
            $this->CreatePassword("LolFakePasswordTryAgainLater");
        }

        if($loginResult){
            $this->CreateNewCookie($result["Id"], null);
            return true;
        }else{
            return false;
        }
    }

    public function Logout(){
        setcookie("sessionToken", "", time()-360000, "/", "localhost", true, true);
    }

    public function CreateNewUser($userName, $email, $password1, $password2){
        // Username voorwaarde
        // Email voorwaarde
        // Paswoord voorwaarde
        
        if($password1 == $password2){
            $password = $this->CreatePassword($password1);
        
            if($this->accountRepository->CreateUser($userName, $email, $password)){
                return true;
            }
        }
        else{
            return false;
        }
    }

    public function CreatePassword($password){
        $options = [
            'cost' => 12,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public function CreateGuid(){
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,
            // 48 bits for "node"
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    public function CleanOldSessions(){
        // itterate through sessions check create date with max lifetime and delete if nececary
    }
}
?>