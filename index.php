<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spielmenü</title>
    <link rel="stylesheet" href="style/css/menu_style.css">
</head>
<body>
    <div class="menu-container">
        <h1>Spielmenü</h1>
        <ul class="menu-list">
            <li><a href="functional/php/spiel.php">Spielen</a></li>
            <li><a href="#" onclick="openPopup()">Regelwerk</a></li>
        </ul>
    </div>

    <!-- Popup für das Regelwerk -->
    <div id="popup" class="modal">
        <div id="popup-content"></div>
    </div>

    <script src="functional/js/popup.js"></script>
</html>
