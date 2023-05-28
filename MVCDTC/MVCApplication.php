<?php
namespace MVCDTC;

use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MVCDTC\DPI\DependencyInjection;
use MVCDTC\Services\Services;
use MVCDTC\Middleware\Request;
use MVCDTC\Router\Route;
use MVCDTC\Router\Router;
use MVCDTC\Settings;

class MVCApplication{
    public Services $services;
    private array $middleware = array();
    private array $routes = array();
    private array $settings;
    private Request $request;
    private Logger $logger;

    function __construct(/*string $settingsPath*/){
        //$this->ConfigureSettingsWithJsonFile($settingsPath);

        ## Logger ##
        $this->logger = new Logger('router');
        $this->logger->pushHandler(new StreamHandler(Settings::LOGFILESPATH . 'mvcapp.log', Logger::DEBUG));

        $this->services = Services::GetInstance();
        $this->request = new Request($this);
    }

    private function ConfigureSettingsWithJsonFile(string $settingsFile) : void{
        try{
            $json = file_get_contents($settingsFile);
            $this->settings = new Settings(json_decode($json,true));
        }catch(Exception $exception){
            $this->logger->error($exception->getMessage());
        }
    }

    public function AddRoute(string $route, string $controller, string $action, string $arg = null) : void {
        $this->routes[$route] = new Route($route, $controller, $action, $arg);
    }

    public function AddMiddleware(string $className, ?string $name = null) : void {
        if($name === null){
            array_push($this->middleware, $className);
        }else{
            $this->middleware[$name] = $className;
        }
    }

    private function ApplyMiddleware(Request $request) {
        foreach($this->middleware as $key => $ware){
            $obj = new $ware(...DependencyInjection::LoadDependency($ware));
            $this->middleware[$key] = $obj;
            $this->request = $obj->Next($request, $key);
        }
        $this->services->AddServiceInstanciated($request, "Request");
    }

    public function BuildPlatform() : void {
        $this->ApplyMiddleware($this->request);
        $router = new Router($this->routes, $this->request);
    }

    public function PrintPlatformInformation() : void {
        print "Platform is build, " . count($this->routes) . " route(s) loaded, " . count($this->middleware) . " middleware(s) loaded and " . count($this->services) . " service(s) loaded.";
    }
}