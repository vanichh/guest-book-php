<?php
$linkData = [
  'host' => 'localhost',
  'user' => 'root',
  'password' => 'root',
  'db_name' => 'test',
];
$link = mysqli_connect($linkData["host"], $linkData["user"], $linkData["password"], $linkData["db_name"]);
mysqli_query($link, "SET NAMES 'utf8'");
if (!empty($_POST)) {
  $query = "INSERT INTO guest__book SET `name`='$_POST[name]', `text`='$_POST[text]', `date`=CURDATE(), `time`= CURTIME()";
  $resultPOST = mysqli_query($link, $query) or die(mysqli_error($link));
}
$countNote = "SELECT COUNT(*) as count FROM guest__book";
$countNote = mysqli_query($link, $countNote);
$countNote = mysqli_fetch_assoc($countNote)['count'];
$pages = 3;
$NumberPages = ceil($countNote / $pages);
if (!$_GET['pages']) {
  $currentPage = 0;
} else {
  $currentPage = ($_GET['pages'] - 1) * 3;
}
$query = "SELECT * FROM guest__book ORDER BY id DESC LIMIT $currentPage, $pages";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
function pageChanges($operator)
{
  $pages = $_GET['pages'];
  if (!$pages) {
    echo "#";
  } elseif ($operator == '-') {
    echo $pages  - 1;
  } else {
    echo $pages + 1;
  }
}
function disabledStart($get)
{
  if ($get <= 1 or !$get) {
    echo "disabled";
  }
}
function disabledEnd($get)
{
  global $NumberPages;
  if ($get >= $NumberPages) {
    echo "disabled";
  }
}
