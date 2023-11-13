let header = document.getElementById("sitio-header");

window.addEventListener("mousemove", (e) => {
    let mouseY = e.clientY;

    if (mouseY < 80) { 
        header.style.top = "0";
        header.style.position ="sticky";
    } else {
        header.style.top = "-100px";
        header.style.position = "fixed";
    }
});