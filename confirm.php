<?php require_once('data.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>カウンセリングシート（結果）</title>
	<link rel="stylesheet" href="confirm.css">
</head>
<body class="bodyC">
	<header>
		<div class="an-titleC"><h1>カウンセリングシート結果</h1></div>
	</header>
	<main class="mainC">
		<h4>名前:<?php echo $_POST['userName'] ?></h4>
		<h5><?php 
				if(empty($_POST['userName'])){
    			echo "お名前が未入力です。<input type='button' value='戻る' onClick='history.back()'>";
    			}
		 ?></h5>
		<?php foreach ($ques as $que): ?>
		<div class="qblock">
			<h3><?php echo $que -> getName(); ?></h3>
			<p><?php echo implode("、", $_POST[$que -> getName()])  ?></p>	
			<h5><?php 
				if(empty(implode($_POST[$que -> getName()]))){
    			echo "未入力です。<input type='button' value='戻る' onClick='history.back()'>";
    			}
		 ?></h5>
		</div><?php endforeach ?>
		<input type="button" value="内容を変更する" onClick="history.back()">
		<button  type="submit">送信</button>
	</main>
</body>
</html>
