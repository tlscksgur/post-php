<?php
require_once "db.php";
require_once "page.php";
session_start();

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$idplus = $_SESSION['ss']->id;

DB::exec("INSERT INTO post (name, title, content, writ) VALUES ('$name', '$title', '$content', '$idplus')");

echo  "<script>location.href='/'</script>";
exit();
