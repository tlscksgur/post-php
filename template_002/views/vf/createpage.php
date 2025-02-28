<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="create" method="post">
    <!-- <input type="hidden" name="idx" value="<?php $_POST["idx"] ?>"> -->
    <textarea type="text" name='name' autofocus placeholder='이름' class="border"></textarea>
    <textarea type="text" name='title' placeholder='제목' class="border"></textarea>
    <textarea type="text" name='content' placeholder='내용' class="border"></textarea>
    <input type="submit" value="보내기">
</form>


</body>
</html>