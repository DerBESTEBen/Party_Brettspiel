<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regelwerk</title>
    <link rel="stylesheet" href="style\css\regelwerk_style.css">
</head>
<body>
    <div class="instructions-container">
        <!-- Schließen-Button oben rechts -->
        <span class="close" onclick="closePopup()">&times;</span>
        
        <h1>Regelwerk</h1>
        <h2>Spielablauf:</h2>
        <ol>
            <li>Einstellen, wie viele Spieler mitspielen.</li>
            <li>Eingabe der Namen.</li>
            <li>Spielstart.</li>
            <li>Erster Spieler würfelt.</li>
            <li>Spielfigur des Spielers zieht die gewürfelte Augenzahl.</li>
            <li>Aktion des aktuellen Spielfeldes wird ausgeführt (Vor, zurück, Joker).</li>
            <li>Ranglisten werden aktualisiert.</li>
            <li>Spielzug wird beendet.</li>
            <li>Nächster Spieler würfelt.</li>
        </ol>
    </div>

    <script>
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>
