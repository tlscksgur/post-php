<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="create.php" method="post">
<input type="text" name='title' placeholder='이름' style="border: 1px solid black;">
    <input type="text" name='content' placeholder='제목' style="border: 1px solid black;">
    <input type="text" name='name' placeholder='내용' style="border: 1px solid black;">
     <button type="submit">만들기</button>
    </form>
<form action="quit.php" method='post'>
    <button type="submit">나가기</button>
</form>    
    
</body>
</html>