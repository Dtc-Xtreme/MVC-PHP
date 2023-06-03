<?php
namespace MVCDTC\Router;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MVCDTC\Middleware\Request;
use MVCDTC\Controllers\Controller;
use MVCDTC\Middleware\Authentication;
use MVCDTC\Settings;
use MVCDTC\DPI\DependencyInjection;

class Router{
    private Logger $logger;
    public array $routingList;
    //private Response $response;
    private Request $request;
    
    function __construct(array $routes, Request $request){
        $this->routingList = $routes;
        $this->request = $request;

        ## Logger ##
        $this->logger = new Logger('router');
        $this->logger->pushHandler(new StreamHandler(Settings::LOGFILESPATH . 'router.log', Logger::DEBUG));

        ## Startup ##
        $this->AnalyzeRequest($this->request);
    }

    function AnalyzeRequest(Request $request){
        ## Check first if there is a route that is the same as in the routingList. Then switch it with the requested uri ##
        $a = $request->getRequest();
        if (array_key_exists($request->getRequest(), $this->routingList)){
            $request->setRequest($this->routingList[$this->request->getRequest()]);
        }
        $controller = $this->InstantiateController($request);
    }

    function InstantiateController(Request $request) : Controller{
        $exist = false;
        $controllerClass = Settings::NAMESPACE_PROJECT . "\\". Settings::CONTROLLERS_PATH . "\\" . $request->getController() . "Controller";
        // Check user namespace first if not found, use internal namespace.
        if(class_exists($controllerClass)){
            $exist = true;
        }else{
            $controllerClass = Settings::NAMESPACE_BASE . "\\" . Settings::CONTROLLERS_PATH . "\\" . $request->getController() . "Controller";
            if(class_exists($controllerClass)){
                $exist = true;
            }
        }

        ## Check if controller class exist and include it ##
        if($exist && method_exists($controllerClass, $request->getView())){
            // dependency injection toepassen op de controller.
            return new $controllerClass(...DependencyInjection::LoadDependency($controllerClass));
        }else{
            $this->logger->error("Controller " . $controllerClass . " or method " . $request->getView() . " was not found!");
            $request->setController("Error");
            $request->setView("PageNotFound");
            $controllerClass = Settings::NAMESPACE_PROJECT . "\\". Settings::CONTROLLERS_PATH . "\\" . $request->getController() . "Controller";
            if(!class_exists($controllerClass)){
                $controllerClass = Settings::NAMESPACE_BASE . "\\" . Settings::CONTROLLERS_PATH . "\\" . $request->getController() . "Controller";
            }
            return new $controllerClass(...DependencyInjection::LoadDependency($controllerClass));
        }
    }
}
//$this->Redirect("error/pagenotfound");
?>