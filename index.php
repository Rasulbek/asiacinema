<?php


require './libs/Database.php';
require './libs/Session.php';
require './libs/Start.php';
require './libs/Controller.php';
require './libs/Model.php';
require './libs/View.php';

require './config/database.php';
require './config/path.php';


$session  = new Session();
$session->init();


$aplication = new Start();
