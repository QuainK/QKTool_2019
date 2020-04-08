<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>风信子Hyacinth</title>
</head>

<body>
<?php
    session_start();

    if (!isset($_POST['submit'])) {
        header("Refresh:3;url=login.html");
        session_destroy();
        exit('请登录账号，正在为您跳转到登录界面，若无反应可以<a href="login.html">点击此处登录</a>');
    }
    $login_type = $_POST['login_type'];
    $password = $_POST['password'];
    include('conn.php');
    switch ($login_type) {
        case 'uid':
            $uid = $_POST['account'];
            $sql = "select * from usertab where id = '$uid' limit 1";
            break;
        case 'email':
            $mail = $_POST['account'];
            $sql = "select * from usertab where mail = '$mail' limit 1";
            break;
        case 'phone':
            $phone = $_POST['account'];
            $sql = "select * from usertab where phone = '$phone' limit 1";
            break;
        default:
            break;
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["pw"] == $password) {
            echo '<br>' . $row["mail"] . '欢迎你！用户ID：' . $row["id"] . '<br><br>';
            echo '<a href="usercenter.php" action="">用户中心</a><br><br>';
            echo '<a href="logout.php">注销登录</a> ';
            $_SESSION['userid'] = $row["id"];
            $_SESSION['email'] = $row["mail"];
            $_SESSION['phone'] = $row["phone"];
            $_SESSION['name'] = $row["name"];
        } else {
            echo '<script>alert("密码错误！请重试");history.back(-1);</script>';
        }
    } else {
        echo '<script>alert("用户不存在！请重试");history.back(-1);</script>';
    }
    mysqli_free_result($result);
    exit();
    ?>
</body>

</html>
