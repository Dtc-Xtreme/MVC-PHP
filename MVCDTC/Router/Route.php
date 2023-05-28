<?php

namespace MVCDTC\Router;

class Route{
    private string $route;
    private string $controller;
    private string $action;
    private ?string $arg;

    function __construct(string $route, string $controller, string $action, ?string $arg = null){
        $this->route = $route;
        $this->controller = $controller;
        $this->action = $action;
        $this->arg = $arg;
    }

    public function getRoute() :string {
        return $this->route;
    }
    public function getController() :string {
        return $this->controller;
    }
    public function getAction() :string {
        return $this->action;
    }
    public function getArg() : ?string {
        return $this->arg;
    }
}