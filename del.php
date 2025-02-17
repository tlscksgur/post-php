<?php
require_once 'db.php';

$idx = $_POST['idx'];
DB::exec("DELETE FROM post WHERE idx = '$idx'");
header("Location: index.php"); 
exit();