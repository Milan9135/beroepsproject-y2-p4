<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

#DB locatie dingen
include('calculator.php');

#registreer query 
if (isset($_POST["registreer"])) {
    $sql = "INSERT INTO `klanten` (`Naam`, `Wachtwoord`)
            VALUES (:Naam, :Email, :Wachtwoord)";
            $stmt = $pdo->prepare($sql);
            
            $data = [
                "Naam" => $_POST['Naam'],
                "Wachtwoord" => $_POST['Wachtwoord'],
            ];
            $stmt->execute($data);
            header("index.html"); 
        }
?>

<body>
    <main>

        <fieldset>
            <form method="POST">
                <legend></legend>

                <label for="name">Naam</label>
                <input type="text" name="name">
                
                <label for="password">Wachtwoord</label>
                <input type="text" name="password">

                <button value="submit"></button>
            </form>
        </fieldset>

    </main>
</body>
</html>