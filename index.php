<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice en PHP</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="calculate.php" method="POST">
        <label for="number1">Nombre 1:</label>
        <input type="number" name="number1" id="number1" required>

        <label for="operation">Opération:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Soustraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>

        <label for="number2">Nombre 2:</label>
        <input type="number" name="number2" id="number2" required>

        <button type="submit">Calculer</button>
    </form>
</body>
</html>