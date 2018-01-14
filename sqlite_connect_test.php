<?php
//変数の初期化
$db = null;
$sql = null;
$res = null;
$row = null;

$db = new SQLite3("/var/www/html/yamada.db");

// データの取得
$sql = 'SELECT StoreID, Password FROM login';
$res = $db->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SQLite テスト</title>

</head>
<body>

<?php
    while( $row = $res->fetchArray() ) {
           echo '<p>' . $row[0] . '</p>';
    }
?>

</body>
</html>
