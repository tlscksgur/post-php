<?php
require_once 'db.php';

$idx = $_POST['idx'];

$writing = DB::fetch("SELECT * FROM post WHERE idx=$idx");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="correction.php" method="post">
        <input type="hidden" name="idx" value="<?= $_POST['idx']?>">
        <input type="text" name="n" value="<?= $writing->name ?>" autofocus placeholder="이름 수정하기" class="border">
        <input type="text" name="t" value="<?= $writing->title ?>" placeholder="제목 수정하기" class="border">
        <input type="text" name="c" value="<?= $writing->content ?>" placeholder="내용 수정하기" class="border">
        <button type="submit">수정완료</button>
    </form>
    <form action="/index" method="post">
        <button type="submit">취소</button>
    </form>
</body>
</html>