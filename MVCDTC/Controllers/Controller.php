<?php
namespace MVCDTC\Controllers;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use MVCDTC\Settings;
use MVCDTC\Middleware\Request;
use MVCDTC\Models\Response\Response;

use MVCDTC\Models\HTMLTagBuilder\CSS;
use MVCDTC\Models\HTMLTagBuilder\JavaScript;

class Controller{
    protected Logger $logger;
    protected Request $request;
    protected Response $response;

    function __construct(Request $request){
        ## Logger ##
        $this->logger = new Logger('controller');
        $this->logger->pushHandler(new StreamHandler(Settings::LOGFILESPATH . 'controller.log', Logger::DEBUG));
        $this->request = $request;
        $this->response = new Response($this->request);
        $this->CallRequestedMethod();
    }

    function CallRequestedMethod() : void{
        call_user_func(array($this, $this->request->getView()));
    }

    function View() : void{
        // builder
        //$this->response->AddHeader("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        $this->response->AddCSS("/css/basic.css");
        $this->response->AddJavaScript("/javascript/basic.js");
        $this->response->Build();
    }

    function Redirect($newRoute) : void{
        header("Location: " . $newRoute);
        exit();
    }
}
?>