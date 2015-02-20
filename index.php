<?php
require __DIR__.'/models/view.php';
require __DIR__.'/models/news.php';
require __DIR__.'/controllers/news.php';
require __DIR__.'/controllers/add.php';
require __DIR__.'/controllers/dell.php';
require __DIR__.'/controllers/edit.php';

$view = get_view();
require __DIR__.'/views/index.php';