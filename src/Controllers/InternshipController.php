<?php
namespace MVCProject\Controllers;

use MVCDTC\Controllers\Controller;
use MVCDTC\Middleware\Request;

class InternshipController extends Controller{
    public function __construct(Request $request){
        parent::__construct($request);
    }

    public function Index(){
        $this->View();
    }
}
?>