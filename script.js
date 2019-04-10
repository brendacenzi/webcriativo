function mostraMenu(){
    var elem = document.getElementById("menu").getElementsByTagName("ul")[0];
    if(elem.style.display == "block")
        elem.style.display = "none";
    else
        elem.style.display = "block";
}

function mostraMenu2(){
    var elem = document.getElementById("menu-index").getElementsByTagName("ul")[0];
    if(elem.style.display == "block")
        elem.style.display = "none";
    else
        elem.style.display = "block";
}