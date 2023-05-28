<?php
namespace MVCDTC\Models\HTMLTagBuilder;

use MVCDTC\Models\HTMLTagBuilder\IHTMLTag;

class CSS implements IHTMLTag{
    private string $url;

    function __construct(string $url){
        $this->url = $url;
    }

    public function Build() : string{
        return '<link rel="stylesheet" href="' . $this->url . '">';
    }
}
?>