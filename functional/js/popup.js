function openPopup() {
    fetch('functional/php/regelwerk.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById("popup-content").innerHTML = data;
            document.getElementById("popup").style.display = "block";
        });
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}
