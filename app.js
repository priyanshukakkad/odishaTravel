var myVar;

function loading() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.querySelector('.mother').style.display = "block";
}