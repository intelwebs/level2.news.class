<?php

if(!empty($_POST) && $_POST['view'] == 'add'){
    $data = [];
    if(!empty($_POST['title']) && !empty($_POST['content'])){
        $data['date'] = $_POST['date'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
    }

    $news->add($data);
    header('Location: /');
    die;
}