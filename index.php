<?php
require_once 'db.php';
session_start();
if ($_SESSION['ss']) {
	echo '로그인완료 id: ' . $_SESSION['ss']->id;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>

	<script>
		function goPost(e){
			location.href = `clickpage.php?idx=${e.id}`
		}
	</script>
</head>
<body>
<?php session_start(); ?>
<div class="login">
    <?php if ($_SESSION['ss'] ?? false): ?>
        <a href="signout.php" class="out">로그아웃</a>
    <?php else: ?>
        <a href="loginshow.php" class="in">로그인</a>
        <a href="joinshow.php" class="join">회원가입</a>
    <?php endif; ?>
</div>
<div class="container">
	<div class="btnbox">
		<form action="page.php" method='post'>
			<button type='submit' class='storybtn'>게시물 작성</button>
		</form>
		<form action="file.php" method='post'>
			<button type='submit' class="">파일 업로드</button>
		</form>
	</div>
		<div class="content">
			<div class="head">
				<ul>
					<li>name</li>
					<li>title</li>
					<li>content</li>
				</ul>
			</div>
			<div>
			</div>
			<div class="contentbody">
				<?php foreach($users as $key => $value): ?>
					<ul id="<?= $value-> idx ?>" onclick="goPost(this)">
						<li class="name"><?= $value->name ?></li>
						<li class="title"><?= $value->title ?></li>
						<li class="content"><?= $value->content ?></li>
						<li><?= $value->date ?></li>
						<li>
							<form action="del.php" method="post">
								<input type="hidden" name="idx" value="<?= $value->idx ?>">
								<button type="submit">삭제</button>
							</form>
						</li>
					</ul>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</body>
</html>