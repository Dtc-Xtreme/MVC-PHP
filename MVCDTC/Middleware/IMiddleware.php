<?php
namespace MVCDTC\Middleware;

interface IMiddleware{
    public function Next(object $request, string $key) : object;
}

?>