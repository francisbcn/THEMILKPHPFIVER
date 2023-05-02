document.getElementById("burguer").addEventListener("click", openNav);
document.querySelector(".closebtn").addEventListener("click", closeNav);


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


