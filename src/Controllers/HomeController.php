<?php
namespace MVCProject\Controllers;

use MVCDTC\Controllers\Controller;
use MVCDTC\Middleware\Request;
use MVCDTC\Repositories\TestRepository;

class HomeController extends Controller{
    public function __construct(Request $request){
        parent::__construct($request);
    }

    public function Index(){
        $this->View();
    }

    public function Reflection(){
        $this->View();
    }

    public function Future(){
        $this->View();
    }

}
?>