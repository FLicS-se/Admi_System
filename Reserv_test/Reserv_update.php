<!DOCTYPE html>
<html lang="ja">
<head>
<title>ふらっとやまだ: 予約者編集</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Reservvv.css"/>
</head>

<center>

<body>
<h1>予約者編集</h1>
<p>現在予約されている予約者を編集します。</p>
<p>各テキストボックスを編集後は更新するボタンで更新を行ってください。</p>


UPDATE文
<form action="" method="post">
<dl>
<dt>名前</dt>
<dd>
<input type="text" name="reserv_name" size="15" maxlength="10" value="" />
</dd>
<dt>人数</dt>
<dd>
<input type="text" name="reserv_name" size="10" maxlength="100" value="" />
</dd>
</dl>

<dt>日</dt>
<dd>
<input type="text" name="reserv_name" size="10" maxlength="10" value="" />
</dd>
</dl>

<input type="submit" value="更新する">
</form>


<form action="Reserv.php" method="post">
<div id="back">
<input id="back_button" type="submit" value="戻る">
</div>
</form>

</center>
</body>
</html>
