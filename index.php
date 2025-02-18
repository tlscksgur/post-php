<?php
require_once 'db.php';
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
<div class="container">
	<form action="page.php" method='post'>
		<button type='submit' class='storybtn'>게시물 작성</button>
	</form>
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