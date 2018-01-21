<?php
        session_start();
	$db = new SQLite3("/var/www/html/yamada.db");

        $sql = 'SELECT * FROM reservation where StoreID ='.$_SESSION['my_id'];
        $reservRes = $db->query($sql);
	
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<title>ふらっとやまだ: 予約者一覧</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Reservvv.css"/>
</head>

<body>

<center>
<h1>予約者一覧</h1>
<p>予約者の一覧です。</p>

<input type="radio" name="reserv[]" value="name">
<label for=""></label>



<form action="./Reserv_insert.php" method="post">
<div id="">
<input type="submit" value="追加">
</div>
</form>


<form action="./Reserv_update.php" method="post">
<div id="">
<input type="submit" value="編集">
</div>
</form>

<form action="" method="post">
<div id="">
<input type="submit" value="削除">
</div>
</form>

<form action="./Reserv_unjump.php" method="post">
<div id="back">
<input id="back_button" type="submit" value="戻る">
</div>
</form>

</center>

</body>
</html>

