let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("menu-list").style.top = "0";
    } else {
        document.getElementById("menu-list").style.top = "-90px";
    }
    prevScrollpos = currentScrollPos;
}