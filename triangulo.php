<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora da Área do Triângulo</h1>
    <form action="triangulo.php" method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required>
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required>

        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['base']) && isset($_POST['altura'])){ 
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = ($base * $altura) / 2;

    if ($area > 100) {
        echo "A área do triângulo é $area e é maior que 100.";
    } else {
        echo "A área do triângulo é $area e é menor ou igual a 100.";
    }
}
    ?>
</body>
</html>
