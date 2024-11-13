<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gerador de rifa</h1>
    <form method="POST" action="rifa.php">
        <div class="input-box">
            <input type="text" name="premio" placeholder="Prêmio" required maxlength="100">
        </div>
        <br>
        <div class="input-box">
            <input type="date" id="data" name="data" placeholder="Data">
        </div>
        <br>
        <div class="input-box">
            <input type="number" name="valor" placeholder="Valor"  step="0.1">
        </div>
        <br>
        <div class="input-box">
            <input type="number" name="numeros" placeholder="Quantidade de numeros"  step="0001" >
        </div>
        <br>
        <div class="btlogin">
            <input type="submit" name="gerar" value="gerar  " id="Gerar">
        </div>
        <br>
    </form>
</body>

</html>