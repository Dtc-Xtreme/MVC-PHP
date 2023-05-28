<?php
namespace MVCDTC\Services;

use MVCDTC\Repositories\TestRepository;
use MVCDTC\DPI\DependencyInjection;

class Services{
    ## Singleton ##
    private static $instance;

    public static function GetInstance(){
        if (self::$instance == null)
        {
          self::$instance = new Services();
        }
     
        return self::$instance;
    }

    ## Object ##
    private array $list = array();

    private function __construct(){

    }
    
    ## Interface implementations ##
    public function AddService(string $type) : void{
        // Add service by classname so it can be later instantiated.
        if(!array_key_exists($type, $this->list)){
            $this->list[$type] = $type;
        }
    }

    public function AddServiceAndInstanciate(string $type) : void {
        if(!array_key_exists($type, $this->list)){
            $this->list[$type] = new $type(...DependencyInjection::LoadDependency($type));
        }
    }

    public function AddServiceInstanciated(object $obj) : void {
        // Add an instance of an object to services.
        if(!array_key_exists(get_class($obj), $this->list)){
            $this->list[get_class($obj)] = $obj;
        }
    }
    
    public function GetService(string $type) : ?object{ 
        if(array_key_exists($type, $this->list)){
            if(is_object($this->list[$type])){
                return $this->list[$type];
            }else{
                $instance = new $this->list[$type](...DependencyInjection::LoadDependency($type));
                $this->list[$type] = $instance;
                return $instance;
            }
            
        }else{
            return null;
        }
    }
}
?>