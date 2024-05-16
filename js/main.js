function mobilemenu() {
    var x = document.getElementById("navbar");

    if (x.style.display === "block") {
        console.log("Hidden menu");
        x.style.display = "none";
    } else {
        console.log("Menu is now shown");
        x.style.display = "block";
    }
}

document.getElementById("mobilemenuicon").addEventListener("click", () => {
    mobilemenu();
})