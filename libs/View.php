<?php

class View
{
   function __construct(){

   }
    public function render($name){
        Session::init();

        require 'views/navbar.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
    }
    public function render1($name){
        require'views/'.$name.'.php';
    }
}