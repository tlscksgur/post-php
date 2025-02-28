<?php
require_once "db.php";
session_start();

$idx = $_GET['idx'];
$users = DB::fetchAll("SELECT * FROM post WHERE idx = $idx");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css?v=<?php time();?>">
</head>
<style>
    .container{width: 50%; margin: 0 auto; border: 1px solid black; border-radius: 5px;}
    .container > ul li {padding: 10px;}
</style>
<body>
<div class="container">
<?php foreach($users as $key => $value): ?>
            <ul id="<?= $value-> idx ?>">
                <li><strong>이름: </strong><?= $value->name ?></li>
                <li><strong>제목: </strong><?= $value->title ?></li>
                <li><strong>내용: </strong><?= $value->content ?></li>
                <li>
                    <?php if($_SESSION['ss']->id === $value->writ): ?>
                        <strong>작성자: </strong><?= $value->writ ?>
                    <?php else: ?>
                        <p>----------------------------------------------------------------------------------------------------------------------------------</p>
                    <?php endif; ?>
                </li>
                <li><?= $value->date ?></li>
                <li>
                    <?php if($_SESSION['ss']->id === $value->writ): ?>
                    <form action="del.php" method="post">
                        <input type="hidden" name="idx" value="<?= $value->idx ?>">
                        <button type="submit">삭제</button>
                    </form>
                    <?php else: ?>
                        <button class="opacity">삭제</button>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if($_SESSION['ss']->id === $value->writ): ?>
                        <form action="input.php" method="post">
                            <input type="hidden" name="idx" value="<?= $value->idx ?>">
                            <button type="submit">수정</button>
                        </form>
                    <?php else: ?>
                        <button class="opacity">삭제</button>
                    <?php endif; ?>
                </li>
                <li>
                <form action="quit.php" method='post'>
                    <button type="submit">나가기</button>
                </form>   
                </li>
            </ul>
        <?php endforeach ?>
    </div>
</body>
</html>