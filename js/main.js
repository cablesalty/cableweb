const classicmodeicon = document.getElementById("classicmodeicon");
const classicmodetext = document.getElementById("classicmodetext");

classicmodeicon.addEventListener("mouseover", () => {
    classicmodetext.style.display = "inline";
});

classicmodeicon.addEventListener("mouseleave", () => {
    classicmodetext.style.display = "none";
}); 

classicmodeicon.addEventListener("click", () => {
    if (window.location.href.endsWith("classic.php")) {
        window.location.href = "/index.php";
    } else {
        window.location.href = "/classic.php";
    }
});