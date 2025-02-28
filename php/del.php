<?php
require_once 'db.php';

$idx = $_POST['idx'];
DB::exec("DELETE FROM post WHERE idx = '$idx'");
echo  "<script>location.href='/'</script>";
exit();