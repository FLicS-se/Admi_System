<?php
$file = $_FILES['img'];

print('ファイル名(name): ' . $file['name'] . '<br />');
print('ファイルタイプ(type): ' . $file['type'] . '<br />');
print('アップロードしたファイル(tmp_name): ' . $file['tmp_name'] . '<br />');
print('エラー(error): ' . $file['error'] . '<br />');
print('サイズ(size): ' . $file['size'] . '<br />');

$ext = substr($file['name'], -4);
if ($ext == '.jpg' || $ext == '.png') {

$filePath = './user_img/' . $file['name'];
move_upload_file($file['tmp_name'], $filePath);
print('<img src="' . $filePath . '" />');

} else {
print('拡張子が.jpgまたは.pngのいずれかのファイルをアップロードしてください');
}
?>
