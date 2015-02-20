<?php

function get_view(){
    if(!isset($_GET['view'])){
        $view = 'news_list';
    }elseif(!empty($_GET['view'])){
        $view = $_GET['view'];
    }
    return $view;
}