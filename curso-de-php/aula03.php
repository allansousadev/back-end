<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set('Asia/Sao_Paulo');
        echo "Hoje é dia ".date("d/M/Y");
        echo "<br/>";
        echo "E a hora atual é ".date("G:i:s");
    ?>
</body>

</html>