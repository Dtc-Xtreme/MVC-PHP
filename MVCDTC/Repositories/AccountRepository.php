<?php
namespace MVCDTC\Repositories;

use \mysqli as mysqli;
use MVCDTC\Settings;

class AccountRepository{
    private string $MYSQLI_SERVER_NAME;
    private string $MYSQLI_USER_NAME;
    private string $MYSQLI_PASSWORD;
    private string $MYSQLI_DB_NAME;

    public function __construct(){
        $this->MYSQLI_SERVER_NAME = Settings::MYSQLI_SERVER_NAME;
        $this->MYSQLI_USER_NAME = Settings::MYSQLI_USER_NAME;
        $this->MYSQLI_PASSWORD = Settings::MYSQLI_PASSWORD;
        $this->MYSQLI_DB_NAME = Settings::MYSQLI_DB_NAME;
    }

    public function SearchSession($guid){
        $conn = new mysqli($this->MYSQLI_SERVER_NAME, $this->MYSQLI_USER_NAME, $this->MYSQLI_PASSWORD, $this->MYSQLI_DB_NAME);
        $stmt = $conn->prepare("SELECT * FROM `Sessions` WHERE `GUID`=?");
        $stmt->bind_param('s', $guid);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $result;
    }

    public function InsertSession($guid, $payload, $expires){
        $conn = new mysqli($this->MYSQLI_SERVER_NAME, $this->MYSQLI_USER_NAME, $this->MYSQLI_PASSWORD, $this->MYSQLI_DB_NAME);
        $stmt = $conn->prepare("INSERT INTO Sessions (GUID, Payload, CreateDate) VALUES (?,?,?)");
        $stmt->bind_param('ssi', $guid, $payload, $expires);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function UpdateSession($payload, $expires, $guid){
        $conn = new mysqli($this->MYSQLI_SERVER_NAME, $this->MYSQLI_USER_NAME, $this->MYSQLI_PASSWORD, $this->MYSQLI_DB_NAME);
        $stmt = $conn->prepare("UPDATE Sessions SET Payload=?, CreateDate=? WHERE GUID=?");
        $stmt->bind_param('sis', $payload, $expires, $guid);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function SelectUserByName($username){
        $conn = new mysqli($this->MYSQLI_SERVER_NAME, $this->MYSQLI_USER_NAME, $this->MYSQLI_PASSWORD, $this->MYSQLI_DB_NAME);
        $stmt = $conn->prepare("SELECT `Id`, `Password` FROM `Users` WHERE `UserName`=?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $result;
    }

    public function CreateUser($userName, $email, $password){
        $conn = new mysqli($this->MYSQLI_SERVER_NAME, $this->MYSQLI_USER_NAME, $this->MYSQLI_PASSWORD, $this->MYSQLI_DB_NAME);
        $stmt = $conn->prepare("INSERT INTO Users (UserName, Email, Password) VALUES (?,?,?)");
        $stmt->bind_param('sss', $userName, $email, $password);
        $stmt->execute();
        $affectedRows = $stmt->affected_rows;
        $stmt->close();
        $conn->close();
        
        if($affectedRows > 0){
            return true;
        }else{
            return false;
        }
    }

    public function AutoStart() : bool{
        return false;
    }
}
?>