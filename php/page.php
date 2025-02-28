<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="create.php" method="post">
    <textarea type="text" name='name' autofocus placeholder='이름' class="border"></textarea>
    <textarea type="text" name='title' placeholder='제목' class="border"></textarea>
    <textarea type="text" name='content' placeholder='내용' class="border"></textarea>
    <button type="submit">만들기</button>
</form>
<form action="quit.php" method='post'>
    <button type="submit">나가기</button>
</form>
</body>
</html>