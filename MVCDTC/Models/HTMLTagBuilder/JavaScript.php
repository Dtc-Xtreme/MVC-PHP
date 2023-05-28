<?php
namespace MVCDTC\Models\HTMLTagBuilder;

use MVCDTC\Models\HTMLTagBuilder\IHTMLTag;

class JavaScript implements IHTMLTag{
    private string $url;

    function __construct(string $url){
        $this->url = $url;
    }

    public function Build() : string{
        return '<script src="' . $this->url . '"></script>';
    }
}
?>