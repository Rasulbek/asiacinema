<?php
/**
 * Created by PhpStorm.
 * User: �������������
 * Date: 06.10.2015
 * Time: 20:06
 */
class Services extends Controller
{
    function __construct(){
        Session::init();
        Session::set('active', "services");
        Session::set('title', "������");
        parent::__construct();
    }
    function index(){
        $this->view->render("index/services");
    }
}