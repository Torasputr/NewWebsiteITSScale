document.addEventListener("DOMContentLoaded", function () {
    const glcBtn = document.getElementById("glc-btn");
    const cikarangBtn = document.getElementById("cikarang-btn");

    document.getElementById("glc-maps").style.display = "block";
    document.getElementById("cikarang-maps").style.display = "none";
    glcBtn.classList.add("active");

    glcBtn.addEventListener("click", function () {
        document.getElementById("glc-maps").style.display = "block";
        document.getElementById("cikarang-maps").style.display = "none";
        setActiveButton(glcBtn);
    });

    cikarangBtn.addEventListener("click", function () {
        document.getElementById("cikarang-maps").style.display = "block";
        document.getElementById("glc-maps").style.display = "none";
        setActiveButton(cikarangBtn);
    });

    function setActiveButton(activeButton) {
        glcBtn.classList.remove("active");
        cikarangBtn.classList.remove("active");
        activeButton.classList.add("active");
    }
});
