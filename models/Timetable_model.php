<?php

/**
 * Created by PhpStorm.
 * User: �������������
 * Date: 06.10.2015
 * Time: 19:58
 */
class Timetable_model extends Model
{
    function __construct(){
        parent::__construct();
    }
    function kinolist(){
        $sql=$this->db->prepare("select * from film");
        $sql->execute();
        return $sql->fetchAll();
    }
}