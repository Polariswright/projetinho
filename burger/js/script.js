function seeLg() {
    var x = document.getElementById("showLg");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
