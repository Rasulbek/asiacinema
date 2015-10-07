<?php

/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.10.2015
 * Time: 19:58
 */
class Timetable_model extends Model
{
    function __construct(){
        parent::__construct();
    }
    function kinolist(){
        date_default_timezone_set("Asia/Tashkent");
        $tm = date("Y-m-d");
        $sql_zapr = "SELECT s.*, f.name, f.year, f.more,f.genre, f.category, f.type,
p.photo_sm,p.photo_md,p.photo_lg, h.name as hall_name,  h.seats
FROM `shows`as s
left join film as f on f.id = s.film_id
left join photo as p on p.film_id = s.film_id
left join halls as h on s.hall = h.id
WHERE s.date>='".$tm."' order by s.date ASC, s.time ASC";

        $sql=$this->db->prepare($sql_zapr);
        $sql->execute();
        return $sql->fetchAll();
    }
}