<?php
require_once "db.php";

extract($_POST);

DB::exec("UPDATE post SET name='$n', title='$t', content='$c' WHERE idx='$idx'");

echo  "<script>location.href='/'</script>";
exit();