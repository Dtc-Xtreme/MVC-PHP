<?php
namespace MVCDTC\Repositories;

class TestRepository{
    public array $Data;

    public function __construct(){
        $this->Data = array(0 => "Alfa", 1 => "Beta");
    }

    public function AutoStart() : bool{
        return false;
    }
}

?>