<?php
require_once "db.php";
session_start();

$idlg = $_POST['idlg'];
$pwlg = $_POST['pwlg'];

$idpw = DB::fetch("SELECT * FROM users WHERE id='$idlg'");

if($idpw && $idpw->pw === $pwlg){
    $_SESSION['ss'] = $idpw;
    header("Location: index.php");
}else{
    echo "로그인실패";
};
?>