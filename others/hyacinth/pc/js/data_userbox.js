function check_input(userdata) {
    var usernameerr = document.getElementById("usernameerr");
    var userpwerr = document.getElementById("userpwerr");
    usernameerr.innerHTML = "*";
    userpwerr.innerHTML = "*";
    if (userdata.username.value == "") {
        usernameerr.innerHTML = "* 用户名不能为空";
        userdata.username.focus();
        return (false);
    }
    if (userdata.userpw.value == "") {
        userpwerr.innerHTML = "* 密码不能为空";
        userdata.userpw.focus();
        return (false);
    }
}