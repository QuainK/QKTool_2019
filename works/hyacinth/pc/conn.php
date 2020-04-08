<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>风信子Hyacinth</title>
</head>

<body>
<?php
$servername = "localhost:3306";
$adminname = "root";
$adminpw = "123";
$dbname = "userdb";
//$servername = "127.0.0.1";
//$adminname = "sfydb_6272233";
//$adminpw = "Qk123456.";
//$dbname = "sfydb_6272233";
$conn = new mysqli($servername, $adminname, $adminpw, $dbname);
if (!$conn) {
  die("连接用户账号数据库失败：" . mysql_error());
}
// else{
//     echo '<script>alert("成功登录数据库");</script>';
// }
?>
</body>
</html>
