<?php

class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'level2';

    public function __construct(){
        mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db($this->database);
        mysql_query("SET NAMES 'utf8'");
    }
}
