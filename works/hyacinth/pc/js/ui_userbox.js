function SwitchCheckBox_RememberMe() {
  var RememberMe = document.getElementById("RememberMe");
  if (RememberMe.checked) {
    RememberMe.checked = false;
  } else {
    RememberMe.checked = true;
  }
}

function SwitchCheckBox_RegisteredAutoLogin() {
  var RegisteredAutoLogin = document.getElementById("RegistedAutoLogin");
  if (RegisteredAutoLogin.checked) {
    RegisteredAutoLogin.checked = false;
  } else {
    RegisteredAutoLogin.checked = true;
  }
}
