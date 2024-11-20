<?php
// Récupérer les données du formulaire
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];
$result = null;

// Effectuer l'opération
if (is_numeric($number1) && is_numeric($number2)) {
    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Erreur : Division par zéro";
            }
            break;
        default:
            $result = "Opération non valide";
    }
} else {
    $result = "Veuillez entrer des nombres valides.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat de la Calculatrice</h1>
    <p>
        <?php 
        if ($result !== null) {
            echo "Le résultat est : " . htmlspecialchars($result);
        }
        ?>
    </p>
    <a href="index.php">Revenir à la calculatrice</a>
</body>
</html>