<?php 
require_once "db.php";
require_once "page.php";

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];

DB::exec("INSERT INTO post (name, title, content) VALUES ('$name','$title','$content')");

header("Location: index.php"); 
exit();