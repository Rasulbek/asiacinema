<?php
/**
 * Created by PhpStorm.
 * User: �������������
 * Date: 06.10.2015
 * Time: 20:10
 */
class About extends Controller
{
    function __construct(){
        Session::init();
        Session::set('active', "about");
        Session::set('title', "� ���");
        parent::__construct();
    }
    function index(){
        $this->view->render("index/about");
    }
}