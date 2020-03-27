<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/edit_area.css">
    <script src="js/ui_home.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <title>风信子 Hyacinth</title>
</head>

<body>
    <div class="header">正在加载网页头部内容</div>
    <div class="edit_area">
        <form id="article_area" name="article_area" method="post" action="upload_article.php" onsubmit="return check_article(this);">
            <input type="text" class="titlebar" name="titlebar" placeholder="标题栏" value=""><br>
            <textarea name="text_area" class="text_area" name="text_area" placeholder="正文" value=""></textarea><br>
            <input type="button" class="preview" value="预览">
            <input type="button" class="save_debug_doc" value="保存草稿">
            <input type="submit" class="save_upload" value="保存并发表">
            <input type="button" class="cancel" value="取消">
        </form>
    </div>
    <div class='footer'>正在加载网页底部内容</div>

    <script>
        $(function () {
            $('.header').load('common/header.html');
            $('.footer').load('common/footer.html');
            // alert($(window).height());
            // alert($(document).height()); 
            if ($(window).height() >= $(document).height()) {
                ($('.footer')).toggleClass("footer-pagebottom");
            }
        });
    </script>
    <script>
        function check_article(article) {
            if (article.titlebar.value == "") {
                alert("文章标题不能为空");
                article.titlebar.focus();
                return (false);
            }
            if (article.text_area.value == "") {
                alert("文章内容不能为空");
                article.text_area.focus();
                return (false);
            }
        }
    </script>

    <?php
    session_start();

    //检测是否登录，若没登录则转向登录界面
    if (!isset($_SESSION['userid'])) {
        echo '<script>alert("请登录后发表文章");</script>';
        // header("Location:login.html");
        header("Refresh:1;url=login.html");
        exit();
    }
    $id = $_SESSION['userid'];
    $mail = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $name = $_SESSION['name'];
    ?>
</body>

</html>