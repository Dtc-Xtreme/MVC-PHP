<?php

namespace MVCDTC\DPI;

use MVCDTC\DPI\IDependencyInjection;
use MVCDTC\Services\Services;

class DependencyInjection implements IDependencyInjection{
  public static function LoadDependency(string $class) : array{
    $array = array();
    $services =  Services::GetInstance();
    $refl = new \ReflectionMethod($class, '__construct');
    $parameters = $refl->getParameters();
    
    foreach ($parameters as $key => $value) {
      $type = $value->getType();
      $name =  $type->getName();
      $array[$key] = $services->GetService($name);
    }

    return $array;
  }
} 
?>