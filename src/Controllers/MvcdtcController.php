<?php
namespace MVCProject\Controllers;

use MVCDTC\Controllers\Controller;
use MVCDTC\Middleware\Request;
use MVCDTC\Models\Response\Response;
use MVCDTC\Repositories\TestRepository;

class MvcdtcController extends Controller{
    public function __construct(Request $request){
        parent::__construct($request);
        $this->response->AddJavaScript("/javascript/registreren.js");        
    }

    // route="/mvcdtc/index"
    // route="/mvcdtc"
    public function Index(){
        $this->View();
    }

    // route="/mvcdtc/reflection"
    public function Reflection(){
        $this->View();
    }
}
?>