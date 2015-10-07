<?php

/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.10.2015
 * Time: 19:55
 */
class Timetable extends Controller
{
    function __construct(){
        Session::init();
        Session::set('active', "timet");
        Session::set('title', "Афиша");
        parent::__construct();
    }
    function index(){
        $this->view->kinolist=$this->model->kinolist();
        $this->view->render("index/timetable");
    }
}