<?php
if(isset($_REQUEST['dell'])) {
    $news->del();
    header('Location: /');
    die;
}