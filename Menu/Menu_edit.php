<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>

<center>
<h1> メニュー編集 </h1>

<?php
if ($_REQUEST['menu'] == '') {
	print('戻るボタンを押してメニューを選択してください。');
}
foreach($_REQUEST['menu'] as $reserve) {
	print('現在、' . htmlspecialchars($reserve, ENT_QUOTES) . 'を編集しています。<br />');
	
}
?>
<dt>概要</dt>
<dd>
<textarea name="about" id="about" cols="50" rows="10"></textarea>
</dd>
</dl>
</form>

<form action="./Menu.html" method="post">
<input type="submit" value="戻る" id="bt"/>
</form>

</center>


