<?php

class Index extends Controller
{

    function __construct(){
        parent::__construct();
        Session::init();
        Session::set('active', "index");
        Session::set('title', "Главная");
    }
    public function index(){
        $this->view->kinolist=$this->model->kinolist();
        $this->view->render("index/index");
        return false;
    }
    public function about(){

        $this->view->mavzu = $this->model->about();
        $this->view->render("index/about");
    }

}

