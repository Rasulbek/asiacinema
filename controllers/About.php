<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.10.2015
 * Time: 20:10
 */
class About extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render("index/about");
    }
}