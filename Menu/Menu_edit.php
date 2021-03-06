<!DOCTYPE html>
<html lang="ja">
<head>
<title>ふらっとやまだ: お品書き編集</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="MenuEdit.css"/>
</head>

<body>
<div id="site-box">

<center>
<div id="title">
<h1> お品書き編集 </h1>
</div>
<div id="description">
<?php
if ($_REQUEST['menu'] == '') {
	print('戻るボタンを押してチェックボックスにチェックを入れてください。');
}
foreach($_REQUEST['menu'] as $reserve) {
	print('現在、' . htmlspecialchars($reserve, ENT_QUOTES) . 'を編集しています。<br />');
}
?>
</div>

<div id="menu">
<form>
<dl>

<dt>お品書き名</dt>
<dd><input id="name" name="tenpo" type="text" id="tenpo" size="50" maxlength="32" /></dd>
<dt>概要</dt>
<dd>
<textarea name="about" id="about" cols="50" rows="10"></textarea>
</dd>
</dl>
</form>
</div>

<div id="taste">
<dt>味情報</dt>
<select taste="pref" id="pref">
<?php
$pref = array('甘み','旨味','苦味','酸味','辛味(塩味)');
foreach($pref as $pref) {

	print('<option value="' . $pref . '">' . $pref . '</option>');
}
?>
</select>
</div>

<div id="update">
<form action="./Menu_update.php" method="post">
<input id="update_button" type="submit" value="同期" >
</form>
</div>

<div id="back">
<form action="./Menu.html" method="post">
<input id="back_button" type="submit" value="戻る" >
</form>
</div>

</body>
</html>
