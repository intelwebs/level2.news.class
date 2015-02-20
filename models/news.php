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
        $id = $_REQUEST['id'];
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

    public function del()
    {
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM news WHERE id = '$id'";
        $this->sql_exec($sql);
    }



    public function update()
    {
        $id = $_REQUEST['id'];
        $date = $_REQUEST['date'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE news SET `title` = '$title', `content` = '$content' WHERE id = '$id'";
        $this->sql_exec($sql);
    }


}