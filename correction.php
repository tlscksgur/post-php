<?php
require_once "db.php";

extract($_POST);

DB::exec("UPDATE post SET name='$n', title='$t', content='$c' WHERE idx='$idx'");

header("Location: index.php");
exit();