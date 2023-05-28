<?php
namespace MVCDTC\Models\Response;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use MVCDTC\Middleware\Request;
use MVCDTC\Settings;
use MVCDTC\Models\HTMLTagBuilder\CSS;
use MVCDTC\Models\HTMLTagBuilder\JavaScript;

class Response{
    protected Logger $logger;
    private Request $request;
    private array $headers = array();
    private string $layout;
    private array $imports = array();
    private string $view;

    public function __construct(Request $request){
        $this->request = $request;
        $this->logger = new Logger('response');
        $this->logger->pushHandler(new StreamHandler(Settings::LOGFILESPATH . 'response.log', Logger::DEBUG));
    }

    public function AddHeader(string $arg) : bool {
        array_push($this->headers,$arg);
        return true;
    }

    public function AddLayout(string $url = Settings::LAYOUT_PATH) : bool {
        $url = Settings::ROOT_PATH . $url;
        if(file_exists($url)){
            $this->layout = $url;
            return true;
        }else{
            $this->logger->error("AddLayout() | File " . $url . " was not found!");
            return false;
        }   
    }

    public function AddCSS(string $url) : bool{
        if(file_exists(Settings::PUBLIC_PATH . $url)){
            array_push($this->imports, new CSS($url));
            return true;
        }else{
            $this->logger->error("AddCSS() | File " . $url . " was not found!");
            return false;
        } 
    }

    public function AddJavaScript(string $url) : bool{
        if(file_exists(Settings::PUBLIC_PATH . $url)){
            array_push($this->imports, new JavaScript($url));
            return true;
        }else{
            $this->logger->error("AddJavaScript() | File " . $url . " was not found!");
            return false;
        } 
    }

    public function AddView() : bool{
        $url = Settings::ROOT_PATH . Settings::VIEWS_PATH . "/" . $this->request->getController() . "/" . $this->request->getView() . ".php";
        if(file_exists($url)){
            $this->view = $url;
            return true;
        }else{
            $url = Settings::MVC_PATH . Settings::VIEWS_PATH . "/" . $this->request->getController() . "/" . $this->request->getView() . ".php";
            $this->view = $url;
            $this->logger->error("AddView() | File " . $url . " was not found!");
            return false;
        } 
    }

    public function LoadHeaders() : void{
        foreach($this->headers as $arg){
            header($arg);
        }
    }

    public function LoadImports() : void{
        foreach($this->imports as $arg){
            print $arg->build();
        }
    }

    function LoadRequestedPage() : void{
        include_once($this->view);
    }

    public function Build() : void{
        $this->AddLayout();
        $this->AddView();
        ob_start();
        $this->LoadHeaders();
        include_once($this->layout);
        print ob_get_clean();
    }
}

?>