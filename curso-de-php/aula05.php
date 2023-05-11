<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>

<body>
    <h1>Tipos primitivos escalares</h1>
    <?php
    $potencia = 3e2;

    var_dump($potencia);
    echo "<br/>";
    echo $potencia;

    $animals = ["cat", "dog"];
    echo "<br/>";
    echo $animals[0];
    echo "<br/>";
    var_dump($animals);
    echo "<br/>";

    class Pessoa
    {
        private string $nome;
    }

    $nome = new Pessoa;
    var_dump($nome);
    ?>
</body>

</html>