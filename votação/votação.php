<!DOCTYPE html>
<html><head>
    <title>Votação</title>
</head><body>
    <!-- título 1-->
    <h1>Votação -> escolha uma das opções abaixo!!!</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="radio" name="opc" value="opcao1">Vermelho<br>

        <input type="radio" name="opc" value="opcao2">Azul<br>
        
        <input type="radio" name="opc" value="opcao3">Verde<br>
        
        <input type="submit" value="Votar"></form>
    <!-- título - Resultado-->
    <h1>Resultado da Votação:</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $opcao = $_POST['opc'];
        $arquivo = 'voto.txt';
        $voto = [];
        if (file_exists($arquivo)) {
            $voto = unserialize(file_get_contents($arquivo));}
        if (array_key_exists($opc, $voto)) {
            $voto[$opc]++;
        } else {
            $voto[$opc] = 1;}
        file_put_contents($arquivo, serialize($voto));}
    if(file_exists($arquivo)){
        $voto = unserialize(file_get_contents($arquivo));
        if (empty($voto)) {
            echo "Nenhum voto foi registrado.";
        } else {
            foreach ($voto as $opc => $qnt) {
                echo "Opção {$opc}: {$qnt} votos<br>";
            } } }
    ?>
</body>
</html>