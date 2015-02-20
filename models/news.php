<?php

require_once __DIR__ . '/../classes/query.php';


class News extends Query
{
    public function getAll()
    {
        $result = $this->sql_query("SELECT * FROM news ORDER BY date DESC");
        return $result;
    }

    public function getOne()
    {
        $id = $_GET['id'];
        $result = $this->sql_query("SELECT * FROM news WHERE id ='$id'");
        return $result;
    }

    public function add($data)
    {
        $sql = "INSERT INTO news
                (date, title, content)
                VALUES
                ('" . $data['date'] . "','" . $data['title'] . "', '" . $data['content'] . "')
                ";
        $this->sql_exec($sql);
    }

}