<?php

$url = "https://fakestoreapi.com/products";
$content = file_get_contents($url);
$json = json_decode($content, true);