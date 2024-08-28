<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus</title>
</head>
<body>
    


    <form method="POST">
        <h1>Converter para fahrenheit</h1>
        <p>Digite os graus em celcius</p>
        <input type="number" name="celcius">

        <h1>Converter para celcius</h1>
        <p>Digite os graus em fahrenheit</p>
        <input type="number" name="fahrenheit">

        <button type="submit" id="converter">Converter</button>

    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["celcius"])) {
                $celcius = $_POST["celcius"];
                $fahrenheigt = ($celsius * 9/5) + 32;
                echo "$celcius °C em fahrenheit é igual a $fahrenheit °F";
            }
            if(isset($_POST["fahrenheit"])) {
                $celcius = $_POST["fahrenheit"];
                $fahrenheigt = ($fahrenheit - 32) / 1,8;
                echo "$fahrenheit °F em Celcius é igual a $celcius °C";
            }
        }

        ?>
</body>
</html>