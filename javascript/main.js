const classicmodeicon = document.getElementById("classicmodeicon");
const classicmodetext = document.getElementById("classicmodetext");

classicmodeicon.addEventListener("mouseover", () => {
    classicmodetext.style.display = "inline";
});

classicmodeicon.addEventListener("mouseleave", () => {
    classicmodetext.style.display = "none";
}); 

classicmodeicon.addEventListener("onclick", () => {
    window.location.href = "/classic.php";
});