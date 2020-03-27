<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>用户注册</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_POST['submit'])) {
        header("Refresh:3;url=register.html");
        session_destroy();
        exit('页面出错，正在为您跳转到注册界面，若无反应可以<a href="login.html">点击此处登录</a>');
    }

    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    include('conn.php');
    $sql = "select mail from usertab where mail = '$mail' limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<script>alert("用户已存在！请重试");history.back(-1);</script>';
    } else {
        $sql = "select phone from usertab where phone = '$phone' limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<script>alert("用户已存在！请重试");history.back(-1);</script>';
        } else {
       
            $sql = "INSERT INTO usertab (pw, mail, phone) VALUES ('$password', '$mail', '$phone')";

            if ($conn->query($sql) === true) {
                echo "注册成功！";
                header("Refresh:3;url=login.html");
                exit('正在为您跳转到登录界面，您也可以<a href="login.html">点击登录</a>');
            } else {
                echo "注册失败！连接数据库出错请重试";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
    exit();
    ?>

       <!-- $username = htmlspecialchars($_POST['username']); -->

  

</body>

</html>