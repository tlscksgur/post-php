<?php

$idlg = $_POST['idlg'];
$pwlg = $_POST['pwlg'];


$idpw = DB::fetch("SELECT * FROM users WHERE id='$idlg'");


if ($idpw && $idpw->pw === $pwlg) {
    $_SESSION['ss'] = $idpw;
    echo  "<script>location.href='/'</script>";
} else {
    echo "<script>
            alert('로그인 실패');
            location.href='/vf/index';
        </script>";
};
?>