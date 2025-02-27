<?php
require_once "db.php";

$file = $_FILES["file"]["name"];

echo $_FILES["file"]["name"];

move_uploaded_file($_FILES["file"]["tmp_name"] , "upload/" .$file );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style></style>
<body>
    <div class="container">
        <a href="./upload/<?php echo $file; ?>">올림</a>
    </div>
</body>
</html>

<!-- 뭔지 모름  -->