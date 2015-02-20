<?php
$news = new News;
$items = $news->getAll();
$item_one = $news->getOne();