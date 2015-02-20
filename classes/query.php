<?php

require_once __DIR__.'/../classes/db.php';


class Query extends DB{

    public function sql_query($query){
        $res = mysql_query($query);
        $array = [];
        while ($row = mysql_fetch_assoc($res)) {
            $array[] = $row;
        }
        return $array;
    }

    public function sql_exec($query){
        mysql_query($query);
        return true;
    }
}

