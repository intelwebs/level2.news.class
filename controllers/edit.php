<?php
    if($_POST['view'] == 'edit'){
        $news->update();
        header('Location: /');
        die;
    }else{
        $item_edit = $news->getOne();
    }