<?php

class Error extends Controller
{
   function __construct()
   {
       parent::__construct();
   }
    public function index($msg = false){
        $this->view->msg = $msg;
        $this->view->render("index/error");
        return false;
    }
    public function error($msg = false){
        $this->view->msg = $msg;
        $this->view->render1("index/error");
        return false;
    }
}
