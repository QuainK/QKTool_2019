function switchContentTitle() {
    var content_title = document.getElementById("content-title");
    // var event = event ? event : window.event;
    // var obj = event.srcElement ? event.srcElement : event.target;
    // alert(obj);
    // alert($(obj).attr('id'));

    if (content_title.className == "content-title") {
        content_title.setAttribute("class", "content-title-hover");
    } else {
        content_title.setAttribute("class", "content-title");
    }
}