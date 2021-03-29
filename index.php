<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);?>
<?php require_once('data.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>カウンセリングシート</title>
	<link rel="stylesheet" href="アンケート.css">
	<link rel="stylesheet" href="confirm.css">
</head>
<body>
	<header>
		<div class="an-title"><h1>カウンセリングシート</h1></div>
		<p>ーーー以下、当てはまる項目を選択してくださいーーー</p>
	</header>
	<main>
		<form class="question-form" action="confirm.php" method="post">
			<div id="question-name" class="question">
				<label for="namebox">お名前</label>
				<input id="namebox" type="text" name="userName" maxlength="20" placeholder="例）田中　花子">
		    </div><br>
		    <div id="question-1" class="question">
		    	<fieldset>
		    	<legend>【1】コンタクトはされていますか？</legend>
		    	<input id="contact-1" type="radio" name="<?php echo $que1 -> getName() ?>[]" value="YES"><label for="contact-1">YES</label>
		    	<input id="contact-2" type="radio" name="<?php echo $que1 -> getName() ?>[]" value="NO"><label for="contact-2">NO</label></fieldset>
		    </div><br>
		    <div id="question-2" class="question">
		    	<fieldset>
		    	<legend>【2】お肌の状態・肌質</legend>
		    	<input id="skin-1" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="ノーマル"><label for="skin-1">ノーマル</label>
		    	<input id="skin-2" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="ドライ"><label for="skin-2">ドライ</label>
		    	<input id="skin-3" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="オイリー"><label for="skin-3">オイリー</label>
		    	<input id="skin-4" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="敏感"><label for="skin-4">敏感</label>
		    	<input id="skin-5" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="コンビネーション"><label for="skin-5">コンビネーション</label>
		    	<input id="skin-6" type="radio" name="<?php echo $que2 -> getName() ?>[]" value="わからない"><label for="skin-6">わからない</label>
		    	</fieldset>
		    </div><br>
		    <div id="question-3" class="question">
		    	<fieldset>
		    	<legend>【3】FACEの悩み</legend>
		    	<input id="face-1" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="つっぱり"><label for="face-1">つっぱり</label>
		    	<input id="face-2" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="乾燥"><label for="face-2">乾燥</label>
		    	<input id="face-3" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="しわ"><label for="face-3">しわ</label>
		    	<input id="face-4" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="ニキビ"><label for="face-4">ニキビ</label>
		    	<input id="face-5" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="ニキビ跡"><label for="face-5">ニキビ跡</label>
		    	<input id="face-6" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="たるみ"><label for="face-6">たるみ</label><br>
		    	<input id="face-7" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="むくみ"><label for="face-7">むくみ</label>
		    	<input id="face-8" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="くすみ"><label for="face-8">くすみ</label>
		    	<input id="face-9" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="シミ"><label for="face-9">シミ</label>
		    	<input id="face-10" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="毛穴の黒ずみ"><label for="face-10">毛穴の黒ずみ</label>
		    	<input id="face-11" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="毛穴のひらき"><label for="face-11">毛穴のひらき</label>
		    	<input id="face-12" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="化粧崩れ"><label for="face-12">化粧崩れ</label><br>
		    	<input id="face-13" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="化粧のりが悪い"><label for="face-13">化粧のりが悪い</label>
		    	<input id="face-14" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="ほてり"><label for="face-14">ほてり</label>
		    	<input id="face-15" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="赤み"><label for="face-15">赤み</label>
		    	<input id="face-16" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="アトピー"><label for="face-16">アトピー</label>
		    	<input id="face-17" type="checkbox" name="<?php echo $que3 -> getName() ?>[]" value="その他"><label for="face-17"><input type="text" name="<?php echo $que3 -> getName() ?>[]" placeholder="その他..."></label>
		    	</fieldset>
		    </div><br>
		    <div id="question-4" class="question">
		    	<fieldset>
		    	<legend>【4】日頃お使いの化粧品とお手入れ方法</legend>
		    	<label for="maker">主なメーカー</label>
		    	<input id="maker" type="text" name="<?php echo $que4 -> getName() ?>[]" placeholder="例）資生堂、kanebo..."><br>
		    	<p>朝</p>
		    	<input id="skincare-1" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="洗顔"><label for="skincare-1">洗顔</label>
		    	<input id="skincare-2" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="化粧水"><label for="skincare-2">化粧水</label>
		    	<input id="skincare-3" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="美容液"><label for="skincare-3">美容液</label>
		    	<input id="skincare-4" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="乳液"><label for="skincare-4">乳液</label>
		    	<input id="skincare-5" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="クリーム"><label for="skincare-5">クリーム</label>
		    	<input id="skincare-6" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="下地"><label for="skincare-6">下地</label>
		    	<input id="skincare-7" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="メイク"><label for="skincare-7">メイク</label>
		    	<input id="skincare-8" type="checkbox" name="<?php echo $que4m -> getName() ?>[]" value="その他"><label for="skincare-8"><input type="text" name="<?php echo $que4m -> getName() ?>[]" placeholder="その他..."></label><br>
		    	<p>夜</p>
		    	<input id="skincare-9" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="洗顔"><label for="skincare-9">洗顔</label>
		    	<input id="skincare-10" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="化粧水"><label for="skincare-10">化粧水</label>
		    	<input id="skincare-11" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="美容液"><label for="skincare-11">美容液</label>
		    	<input id="skincare-12" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="乳液"><label for="skincare-12">乳液</label>
		    	<input id="skincare-13" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="クリーム"><label for="skincare-13">クリーム</label>
		    	<input id="skincare-14" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="クレンジング"><label for="skincare-14">クレンジング</label>
		    	<input id="skincare-15" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="パック"><label for="skincare-15">パック</label>
		    	<input id="skincare-16" type="checkbox" name="<?php echo $que4n -> getName() ?>[]" value="その他"><label for="skincare-16"><input type="text" name="<?php echo $que4n -> getName() ?>[]" placeholder="その他..."></label></fieldset>
		    </div><br>
		    <div id="question-5" class="question">
		    	<fieldset>
		    	<legend>【5】アレルギー</legend>
		    	<input id="allergie-1" type="radio" name="<?php echo $que5 -> getName() ?>[]" value="なし"><label for="allergie-1">なし</label>
		    	<input id="allergie-2" type="radio" name="<?php echo $que5 -> getName() ?>[]" value="あり"><label for="allergie-2">あり(
		    		<input id="allergie-a" type="checkbox" name="<?php echo $que5 -> getName() ?>[]" value="接触"><label for="allergie-a">接触</label>
		    		<input id="allergie-b" type="checkbox" name="<?php echo $que5 -> getName() ?>[]" value="光植物"><label for="allergie-b">光植物</label>
		    		<input id="allergie-c" type="checkbox" name="<?php echo $que5 -> getName() ?>[]" value="金属"><label for="allergie-c">金属</label>
		    		<input id="allergie-d" type="checkbox" name="<?php echo $que5 -> getName() ?>[]" value="食べ物"><label for="allergie-d">食べ物</label>
		    		<input id="allergie-e" type="checkbox" name="<?php echo $que5 -> getName() ?>[]" value="その他"><label for="allergie-e"><input type="text" name="<?php echo $que5 -> getName() ?>[]" placeholder="その他..."></label>
		    		)</label></fieldset>
		    </div><br>
		    <div id="question-6" class="question">
		    	<fieldset>
		    	<legend>【6】毎日の生活リズム</legend>
		    	<input type="radio" name="<?php echo $que6 -> getName() ?>[]" value="--" checked>
		    	<p>食事</p>
		    		<input id="eat-1" type="radio" name="<?php echo $que6a -> getName() ?>[]" value="1日３食"><label for="eat-1">1日３食</label>
		    		<input id="eat-2" type="radio" name="<?php echo $que6a -> getName() ?>[]" value="不規則"><label for="eat-2">不規則（
		    			<input id="eat-2-a" type="checkbox" name="<?php echo $que6a -> getName() ?>[]" value="朝抜き"><label for="eat-2-a">朝抜き</label>
		    			<input id="eat-2-b" type="checkbox" name="<?php echo $que6a -> getName() ?>[]" value="外食"><label for="eat-2-b">外食
		    				<select id="eat-2-b_" name="<?php echo $que6a -> getName() ?>[]" >
		    					<option name="<?php echo $que6a -> getName() ?>[]" value="--">--</option>
		    					<option name="<?php echo $que6a -> getName() ?>[]" value="多い">多い</option>
		    					<option name="<?php echo $que6a -> getName() ?>[]" value="少ない">少ない</option>
		    				</select></label>
		    			<input id="eat-2-c" type="checkbox" name="<?php echo $que6a -> getName() ?>[]" value="間食"><label for="eat-2-c">間食
		    					<select id="eat-2-c_" name="<?php echo $que6a -> getName() ?>[]" >
		    						<option name="<?php echo $que6a -> getName() ?>[]" value="--">--</option>
		    						<option name="<?php echo $que6a -> getName() ?>[]" value="多い">多い</option>
		    						<option name="<?php echo $que6a -> getName() ?>[]" value="少ない">少ない</option>
		    					</select></label>
		    			）</label>
		    	<p>アルコール</p>
		    		<input id="alcohole-1" type="radio" name="<?php echo $que6b -> getName() ?>[]" value="毎日飲む"><label for="alcohole-1">毎日飲む</label>
		    		<input id="alcohole-2" type="radio" name="<?php echo $que6b -> getName() ?>[]" value="週"><label for="alcohole-2">週（
		    			<select id="alcohole-2_n" name="<?php echo $que6b -> getName() ?>[]" >
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="0回">0</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="1回">1</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="2回">2</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="3回">3</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="4回">4</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="5回">5</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="6回">6</option>
		    				<option name="<?php echo $que6b -> getName() ?>[]" value="7回">7</option>
		    			</select>
		    		回）</label>
		    		<input id="alcohole-3" type="radio" name="<?php echo $que6b -> getName() ?>[]" value="飲まない"><label for="alcohole-3">飲まない</label>
		    	<p>タバコ</p>
		    		<input id="cigarette-1" type="radio" name="<?php echo $que6c -> getName() ?>[]" value="吸わない"><label for="cigarette-1">吸わない</label>
		    		<input id="cigarette-2" type="radio" name="<?php echo $que6c -> getName() ?>[]" value="吸う（1日の本数->"><label for="cigarette-2">吸う（1日
		    			<select name="<?php echo $que6c -> getName() ?>[]" id="cigarette-2_n">
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="0本">0</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="1本">1</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="2本">2</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="3本">3</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="4本">4</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="5本">5</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="6本">6</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="7本">7</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="8本">8</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="9本">9</option>
		    				<option name="<?php echo $que6c -> getName() ?>[]" value="10本以上">10本以上</option>
						</select>
					本）</label>
		    	<p>コーヒー</p>
		    		<input id="coffee-1" type="radio" name="<?php echo $que6d -> getName() ?>[]" value="飲まない"><label for="coffee-1">飲まない</label>
		    		<input id="coffee-2" type="radio" name="<?php echo $que6d -> getName() ?>[]" value="飲む（1日->"><label for="coffee-2">飲む（1日
		    			<select name="<?php echo $que6d -> getName() ?>[]" id="coffee-2_n">
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="0杯">0</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="1杯">1</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="2杯">2</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="3杯">3</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="4杯">4</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="5杯">5</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="6杯">6</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="7杯">7</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="8杯">8</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="9杯">9</option>
		    				<option name="<?php echo $que6d -> getName() ?>[]" value="10杯以上">10杯以上</option>
		    			</select>
		    		杯）</label>
		    	<p>補助食品</p>
		    		<input id="supplement-1" type="radio" name="<?php echo $que6e -> getName() ?>[]" value="飲んでいない"><label for="supplement-1">飲んでいない</label>
		    		<input id="supplement-2" type="radio" name="<?php echo $que6e -> getName() ?>[]" value="飲んでいる（メーカー名->"><label for="supplement-2">飲んでいる（メーカー名:
		    			<input id="supplement-2_maker" type="text" name="<?php echo $que6e -> getName() ?>[]" placeholder="例）DHC、ファンケル...">
		    		）</label>
		    	<p>くすり</p>
		    		<input id="medicine-1" type="radio" name="<?php echo $que6f -> getName() ?>[]" value="飲んでいない"><label for="medicine-1">飲んでいない</label>
		    		<input id="medicine-2" type="radio" name="<?php echo $que6f -> getName() ?>[]" value="飲んでいる（種類->"><label for="medicine-2">飲んでいる（種類:
		    			<input id="medicine-2_k" type="text" name="<?php echo $que6f -> getName() ?>[]" placeholder="風邪薬、胃腸薬...">）</label>
		    	<p>睡眠</p>
		    		<select name="<?php echo $que6g -> getName() ?>[]" id="am/pm">
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="午前">午前</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="午後">午後</option>
		    		</select>
		    		<select name="<?php echo $que6g -> getName() ?>[]" id="sleep-1">
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="0時就寝">0時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="1時就寝">1時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="2時就寝">2時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="3時就寝">3時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="4時就寝">4時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="5時就寝">5時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="6時就寝">6時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="7時就寝">7時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="8時就寝">8時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="9時就寝">9時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="10時就寝">10時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="11時就寝">11時</option>
		    			
		    		</select>
		    		<label for="sleep-1">就寝</label><br>
		    		<select name="<?php echo $que6g -> getName() ?>[]" id="am/pm">
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="午前">午前</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="午後">午後</option>
		    		</select>
		    		<select name="<?php echo $que6g -> getName() ?>[]" id="sleep-2">
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="0時就寝">0時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="1時就寝">1時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="2時就寝">2時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="3時就寝">3時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="4時就寝">4時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="5時就寝">5時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="6時就寝">6時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="7時就寝">7時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="8時就寝">8時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="9時就寝">9時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="10時就寝">10時</option>
		    			<option name="<?php echo $que6g -> getName() ?>[]" value="11時就寝">11時</option>
		    			
		    		</select>
		    		<label for="sleep-2">起床</label><br>
		    		<label for="sleep-3" >平均</label>
		    			<select name="<?php echo $que6g -> getName() ?>[]" id="sleep-3_n">
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(1時間未満)睡眠">1時間未満</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(1)時間睡眠">1</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(2)時間睡眠">2</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(3)時間睡眠">3</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(4)時間睡眠">4</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(5)時間睡眠">5</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(6)時間睡眠">6</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(7)時間睡眠">7</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(8)時間睡眠">8</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(9)時間睡眠">9</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(10)時間睡眠">10</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(11)時間睡眠">11</option>
		    				<option name="<?php echo $que6g -> getName() ?>[]" value="平均(12)時間以上睡眠">12時間以上</option>
		    			</select>
		    		<label for="sleep-3">時間</label>
		    	<p>運動</p>
		    		<input id="exercise-1" type="radio" name="<?php echo $que6h -> getName() ?>[]" value="していない"><label for="exercise-1">していない</label>
		    		<input id="exercise-2" type="radio" name="<?php echo $que6h -> getName() ?>[]" value="している:内容->"><label for="exercise-2">している：内容（<input id="exercise-2-a" type="text" name="<?php echo $que6h -> getName() ?>[]" maxlength="30" placeholder="例）野球、サッカー...">）
		    			週（
		    				<select name="<?php echo $que6h -> getName() ?>[]" id="exercise-2-b">
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週0回">0</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週1回">1</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週2回">2</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週3回">3</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週4回">4</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週5回">5</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週6回">6</option>
		    					<option name="<?php echo $que6h -> getName() ?>[]" value="週7回">7</option>
		    				</select>
		    			）回
		    			（
		    			<select name="<?php echo $que6h -> getName() ?>[]" id="exercise-2-c">
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="0時間">0</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="1~2時間">1~2</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="3~4時間">3~4</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="5~6時間">5~6</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="7~8時間">7~8</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="9~10時間">9~10</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="11~12時間">11~12</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="13~14時間">13~14</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="15~16時間">15~16</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="17~18時間">17~18</option>
		    				<option name="<?php echo $que6h -> getName() ?>[]" value="19時間以上">19時間以上</option>
		    			</select>
		    			）時間
		    		</label>
		    	<p>仕事</p>
		    		<input id="work-1" type="radio" name="<?php echo $que6i -> getName() ?>[]" value="立ち仕事"><label for="work-1">立ち仕事</label>
		    		<input id="work-2" type="radio" name="<?php echo $que6i -> getName() ?>[]" value="デスクワーク"><label for="work-2">デスクワーク</label>
		    		<input id="work-3" type="radio" name="<?php echo $que6i -> getName() ?>[]" value="重労働"><label for="work-3">重労働</label>
		    		<input id="work-4" type="checkbox" name="<?php echo $que6i -> getName() ?>[]" value="PC使用"><label for="work-4">PC使用（
		    			<select name="<?php echo $que6i -> getName() ?>[]" id="work-4_n">
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="0時間">0</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="1時間">1</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="2時間">2</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="3時間">3</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="4時間">4</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="5時間">5</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="6時間">6</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="7時間">7</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="8時間">8</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="9時間">9</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="10時間">10</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="11時間">11</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="12時間">12</option>
		    				<option name="<?php echo $que6i -> getName() ?>[]" value="13時間以上">13時間以上</option>
		    			</select>
		    		）時間</label>
		    	<p>ストレス</p>
		    		<input id="stress-1" type="radio" name="<?php echo $que6j -> getName() ?>[]" value="なし"><label for="stress-1">なし</label>
		    		<input id="stress-2" type="radio" name="<?php echo $que6j -> getName() ?>[]" value="あり"><label for="stress-2">あり（
		    			<input id="stress-2-a" type="checkbox" name="<?php echo $que6j -> getName() ?>[]" value="仕事"><label for="stress-2-a">仕事</label>
		    			<input id="stress-2-b" type="checkbox" name="<?php echo $que6j -> getName() ?>[]" value="人間関係"><label for="stress-2-b">人間関係</label>
		    			<input id="stress-2-c" type="checkbox" name="<?php echo $que6j -> getName() ?>[]" value="家庭"><label for="stress-2-c">家庭</label>
		    			<input id="stress-2-d" type="checkbox" name="<?php echo $que6j -> getName() ?>[]" value="恋愛"><label for="stress-2-d">恋愛</label>
		    			<input id="stress-2-e" type="checkbox" name="<?php echo $que6j -> getName() ?>[]" value="その他"><label for="stress-2-e"><input type="text" name="<?php echo $que6j -> getName() ?>[]" maxlength="30" placeholder="その他..."></label>
		    		）</label>
		    		</fieldset>
		    </div><br>
		    <div id="question-7" class="question">
		    	<fieldset>
		    	<legend>【7】BODYの悩み</legend>
		    	<input id="body-1" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="乾燥"><label for="body-1">乾燥</label>
		    	<input id="body-2" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="足のむくみ"><label for="body-2">足のむくみ</label>
		    	<input id="body-3" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="下半身太り"><label for="body-3">下半身太り</label>
		    	<input id="body-4" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="背中ニキビ"><label for="body-4">背中ニキビ</label><br>
		    	<input id="body-5" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="手荒れ"><label for="body-5">手荒れ</label>
		    	<input id="body-6" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="枝毛"><label for="body-6">枝毛</label>
		    	<input id="body-7" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="日焼け"><label for="body-7">日焼け</label>
		    	<input id="body-8" type="checkbox" name="<?php echo $que7 -> getName() ?>[]" value="その他"><label for="body-8"><input type="text" name="<?php echo $que7 -> getName() ?>[]" maxlength="30" placeholder="その他..."></label></fieldset>
		    </div><br>
		    <div id="question-8" class="question">
		    	<fieldset>
		    	<legend>【8】Healthの悩み</legend>
		    	<input id="health-1" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="便秘"><label for="health-1">便秘</label>
		    	<input id="health-2" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="生理不順"><label for="health-2">生理不順</label>
		    	<input id="health-3" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="生理痛"><label for="health-3">生理痛</label>
		    	<input id="health-4" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="冷え性"><label for="health-4">冷え性</label>
		    	<input id="health-5" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="肩こり"><label for="health-5">肩こり</label>
		    	<input id="health-6" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="低血圧"><label for="health-6">低血圧</label>
		    	<input id="health-7" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="高血圧"><label for="health-7">高血圧</label><br>
		    	<input id="health-8" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="不眠症"><label for="health-8">不眠症</label>
		    	<input id="health-9" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="糖尿病"><label for="health-9">糖尿病</label>
		    	<input id="health-10" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="腰痛"><label for="health-10">腰痛</label>
		    	<input id="health-11" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="貧血"><label for="health-11">貧血</label>
		    	<input id="health-12" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="頭痛"><label for="health-12">頭痛</label>
		    	<input id="health-13" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="更年期"><label for="health-13">更年期</label>
		    	<input id="health-14" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="だるさ"><label for="health-14">だるさ</label>
		    	<input id="health-15" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="食欲不振"><label for="health-15">食欲不振</label><br>
		    	<input id="health-16" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="ダイエット"><label for="health-16">ダイエット</label>
		    	<input id="health-17" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="コレステロール"><label for="health-17">コレステロール</label>
		    	<input id="health-18" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="目の疲れ"><label for="health-18">目の疲れ</label>
		    	<input id="health-19" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="足の疲れ"><label for="health-19">足の疲れ</label>
		    	<input id="health-20" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="胃もたれ"><label for="health-20">胃もたれ</label>
		    	<input id="health-21" type="checkbox" name="<?php echo $que8 -> getName() ?>[]" value="その他"><label for="health-21">
		    		<input type="text" name="<?php echo $que8 -> getName() ?>[]" maxlength="30" placeholder="その他...">
		    	</label></fieldset>
		    </div><br>
		    <div id="question-9" class="question">
		    	<fieldset>
		    	<legend>【9】興味があるもの</legend>
		    	<input id="interest-1" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="化粧品"><label for="interest-1">化粧品</label>
		    	<input id="interest-2" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="美白"><label for="interest-2">美白</label>
		    	<input id="interest-3" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="ヘアケア"><label for="interest-3">ヘアケア</label>
		    	<input id="interest-4" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="ダイエット"><label for="interest-4">ダイエット</label>
		    	<input id="interest-5" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="スキンケア"><label for="interest-5">スキンケア</label>
		    	<input id="interest-6" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="エイジングケア"><label for="interest-6">エイジングケア</label>
		    	<input id="interest-7" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="メイク"><label for="interest-7">メイク</label><br>
		    	<input id="interest-8" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="食べ物"><label for="interest-8">食べ物</label>
		    	<input id="interest-9" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="健康"><label for="interest-9">健康</label>
		    	<input id="interest-10" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="ネイル"><label for="interest10-">ネイル</label>
		    	<input id="interest-11" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="ファッション"><label for="interest-11">ファッション</label>
		    	<input id="interest-12" type="checkbox" name="<?php echo $que9 -> getName() ?>[]" value="その他"><label for="interest-12">
		    		<input type="text" name="<?php echo $que9 -> getName() ?>[]" maxlength="30" placeholder="その他...">
		    	</label></fieldset>
		    </div><br>
		   <div id="question-10" class="question">
		    	<input type="submit" value="確認画面へ">
		    </div>
		</form>
	</main>




	<script src="アンケート.js"></script>
</body>
</html>
