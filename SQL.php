<?php
$linkData = [
  'host' => 'localhost',
  'user' => 'root',
  'password' => 'root',
  'db_name' => 'test',
];
$link = mysqli_connect($linkData["host"], $linkData["user"], $linkData["password"], $linkData["db_name"]);
mysqli_query($link, "SET NAMES 'utf8'");