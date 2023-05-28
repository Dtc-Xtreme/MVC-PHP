<?php
namespace MVCDTC\Controllers;

use MVCDTC\Controllers;
use MVCDTC\Services\Authentication;
use MVCDTC\Middleware\Request;

class AccountController extends Controller{
    private Authentication $authentication;

    function __construct(Request $request, Authentication $authentication){
        $this->authentication = $authentication;
        parent::__construct($request);
    }

    function Login(){
        if($_POST != null){
            if($this->authentication->Login($_POST["username"], $_POST["password"])){
                $this->Redirect("/");
            }
        }
        $this->View();
    }

    function Register(){
        if($_POST != null){
            if($this->authentication->CreateNewUser($_POST["username"], $_POST["email1"], $_POST["password1"], $_POST["password2"])){
                $this->Redirect("/account/login");
            }
        }   

        $this->View();
    }

    function Logout(){
        $this->authentication->Logout();
        $this->Redirect("/");
    }
}

?>