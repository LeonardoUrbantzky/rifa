<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">


        <?php



        if (
            isset($_POST["premio"]) &&
            isset($_POST["data"]) &&
            isset($_POST["valor"]) &&
            isset($_POST["numeros"]) &&
            !empty($_POST["premio"]) &&
            !empty($_POST["data"]) &&
            !empty($_POST["valor"]) &&
            !empty($_POST["numeros"])
        ) {
            $premio = $_POST["premio"];
            $data = date('d/m/Y');;
            $valor = $_POST["valor"];
            $numeros = $_POST["numeros"];
            $contador = 1;
            sprintf('%04s', $contador);


            while ($contador <= $numeros) {
                echo "<div class='esquerda'> 
    <h3> N° " . sprintf('%04s', $contador) . " </h3> <br><hr>
    <h3> Nome: </h3> <br> <hr>
    <h3> Endereço: </h3> <br> <hr>
    <h3> Fone: </h3> <br> <hr>
    </div>

    <div class='direita'> 
    <h2 id='titulo'> Ação entre amigos </h2> <br>
    <h3> Premio: $premio ㅤㅤㅤN° " . sprintf('%04s', $contador) . "</h3> <br>
    <h3 id='valor'> Valor: $valor </h3> <br>
    <h3 id='data'> Data: $data </h3>
    </div>";

                $contador++;
            }
        }
        ?>
    </div>
</body>

</html>