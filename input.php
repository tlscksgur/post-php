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
        <input type=" text" name="n" placeholder="이름 수정하기" style="border: 1px solid black;">
        <input type="text" name="t" placeholder="제목 수정하기" style="border: 1px solid black;">
        <input type="text" name="c" placeholder="내용 수정하기" style="border: 1px solid black;">
        <button type="submit">수정완료</button>
    </form>
    <form action="quit.php" method="post">
        <button type="submit">취소</button>
    </form>
</body>
</html>