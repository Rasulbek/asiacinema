<?php

class Database extends PDO
{
   function __construct(){
       parent::__construct('mysql:host='.server.';dbname='.dbname.';charset=windows-1251', ''.user.'', ''.password.'',
       array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'CP1251\''));
   }
}