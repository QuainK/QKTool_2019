<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>用户中心</title>
</head>

<body>
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if (!isset($_SESSION['userid'])) {
  header("Location:login.html");
  exit();
}

//包含数据库连接文件
include('conn.php');

$id = $_SESSION['userid'];
$mail = $_SESSION['email'];
$phone = $_SESSION['phone'];
$name = $_SESSION['name'];
$sql = "select * from usertab where id = '$id' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
}
echo '超变量_SESSION中的值：<br>id: ' . $id . ' mail: ' . $mail . ' phone: ' . $phone . ' name: ' . $name . '<br>';
echo '从数据库实时读取出的用户信息：<br>';
echo '用户ID：' . $row['id'] . '<br>';
echo '用户名：' . $row['name'] . '<br>';
echo '邮箱：' . $row['mail'] . '<br>';
echo '手机：' . $row['phone'] . '<br>';
echo '注册日期：' . date("Y-m-d", $row['regdate']) . '<br>';
echo '<a href="logout.php">注销</a>登录<br>';
?>
</body>
</html>
