<?php
namespace MVCDTC\Controllers;

use MVCDTC\Middleware\Response;

interface IController{
    public function __construct(Response $response);
    public function Index();
}

?>