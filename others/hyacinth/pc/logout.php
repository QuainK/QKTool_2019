<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>风信子Hyacinth</title>
</head>

<body>
    <?php
    session_start();

    unset($_SESSION['userid']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['name']);

    session_destroy();
    
    header("Refresh:3;url=login.html");

    exit('注销成功！<a href="login.html">重新登录</a>或者<a href="home.html">返回首页</a>');
    ?>
</body>

</html>