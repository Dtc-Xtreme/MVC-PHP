<?php
namespace MVCDTC\Middleware;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MVCDTC\Settings;
use MVCDTC\Router\Route;

class Request{
    protected string $originalRequest;
    protected string $request;
    protected array $requestArray;
    protected string $controller;
    protected string $view;
    protected array $extentions = array();
    private Logger $logger;

    function __construct(){
        ## Logger ##
        $this->logger = new Logger('request');
        $this->logger->pushHandler(new StreamHandler(Settings::LOGFILESPATH . 'request.log', Logger::DEBUG));
        $this->originalRequest = $_SERVER["REQUEST_URI"];
        $this->request = strtolower(rtrim($_SERVER["REQUEST_URI"], "/"));
        $this->CreateSectionList();
    }

    function CreateSectionList() : void {
        ## Use requestUri to  make a section list as an array.
        ## Remove the first / and make an array of all sections ##
        $sectionList = explode("/", ltrim($this->request, "/"));
        ## Change every sections first letter to uppercase (if you  pass ucfirst() as string it is callable ##
        $sectionList = array_map("ucfirst", $sectionList);

        ## IF Request only has one element ##
        ## ELSE Request has 2 elements (controller / view) ##
        if(count($sectionList) == 1){
            ## Check if string is empty. The request is to / (https://xxxx/) this will always be redirected to the  HomeController -> Index() ##
            ## Else it requested a page from HomeController. So we add the Home in the section list for the controller ##
            if($sectionList[0] === ""){
                $sectionList[0] = "Home";
                $this->controller = "Home";
            }else{
                $this->controller = $sectionList[0];
            }

            array_push($sectionList, "Index");
            $this->view = "Index";
        }
        else if(count($sectionList) == 2){
            ## If the Count is 2. This means that there was a request for a page of a certain controller ## 
            # view en controller toevoegen als hier iets inveranderd.
            $this->controller = $sectionList[0];
            $this->view = $sectionList[1];
        }
        $this->requestArray = $sectionList;
    }


    public function getOriginalRequest() : string{
        return $this->originalRequest;
    }
    public function getRequest() : string{
        return $this->request;
    }
    public function setRequest(Route $value) : void{
        $this->request = $value->getRoute();
        $this->controller = $value->getController();
        $this->view = $value->getAction();
    }
    public function getRequestArray() : array{
        return $this->requestArray;
    }
    public function getController() : string{
        return $this->controller;
    }
    public function setController(string $value) : void{
        $this->controller = $value;
    }
    public function getView() : string{
        return $this->view;
    }
    public function setView(string $value) : void{
        $this->view = $value;
    }
    public function AddExtention(object $arg, string $key){
        $this->extention[$key] = $arg;
    }
}
?>