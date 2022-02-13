function menu(x) {
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        document.getElementById('menu').style.width = '100%';
        document.getElementById('menu2').style.width = '100%';
        x.style.opacity = '0';
    }else{
        document.getElementById('menu').style.width = '20%';
        document.getElementById('menu2').style.width = '20%';
        x.style.opacity = '0';
    }

}
function closemenu() {
    document.getElementById('menu').style.width = '0%';
    document.getElementById('menu2').style.width = '0%';
    document.getElementById('menubutton').style.opacity = '1';
}
