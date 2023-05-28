<?php
namespace MVCProject\Controllers;

use MVCDTC\Controllers\Controller;
use MVCDTC\Middleware\Request;

class ErrorController extends Controller{

    function __construct(Request $request){
        parent::__construct($request);
    }

    function PageNotFound(){
        $this->View();
    }
}
?>