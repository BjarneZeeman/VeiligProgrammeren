<html>
<head>
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="input1" placeholder="Zoekopdracht">
        <button type="submit" name="submit1">Zoek</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit1'])) {
    if (!empty($_POST['input1'])) {
        echo "De zoekopdracht is: " . $_POST['input1'];
    } else {
        echo "Geen resultaat gevonden!";
    }
}

// Opdracht 1 - Je krijgt een alert waar in staat "XSS voorbeeld".
// Als je op de "OK" button van de alert klikt wordt "De zoekopdracht is: Coole website ?" weergegeven.

// Opdracht 2 - Er wordt "De zoekopdracht is: invoert?" weergegeven. Het stukje "invoert?" wordt blauw weergegeven.

// Opdracht 3 - Door de input te beperken tot alleen letters en cijfers.
?>