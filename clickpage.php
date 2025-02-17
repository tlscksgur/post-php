<?php
require_once "db.php";


$idx = $_GET['idx'];
$users = DB::fetchAll("SELECT * FROM post WHERE idx = $idx");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
        color: inherit;
        box-sizing: border-box;
    }
    .container{width: 50%; margin: 0 auto; border: 1px solid black;}
    
    .container > ul li {
        padding: 10px;
    }
</style>
<body>
<div class="container">
<?php foreach($users as $key => $value): ?>
            <ul id="<?= $value-> idx ?>" onclick="goPost(this)">
                <li><strong>이름: </strong><?= $value->title ?></li>
                <li><strong>제목: </strong><?= $value->content ?></li>
                <li><strong>내용: </strong><?= $value->name ?></li>
                <li><?= $value->date ?></li>
                <li>
                    <form action="del.php" method="post">
                        <input type="hidden" name="idx" value="<?= $value->idx ?>">
                        <button type="submit">삭제</button>
                    </form>
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