<?php
require_once "db.php";

$id = $_POST['id'];
$pw = $_POST['pw'];

DB::exec("INSERT INTO users (id, pw) VALUES ('$id','$pw') ");

header("Location: index.php");