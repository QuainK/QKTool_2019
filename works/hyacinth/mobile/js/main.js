function switch_sidebar_display() {
  var sidebar = document.getElementById("sidebar");
  var container = document.getElementById("container");
  if (sidebar.className == "sidebar") {
    sidebar.className = "sidebar_hidden";
  } else {
    sidebar.className = "sidebar";
  }
  if (container.className == "container") {
    container.className = "container_shift_right";
  } else {
    container.className = "container";
  }
}
