<!DOCTYPE html>
<html>
<head>
    <title>sistema login - Atividade PW2 PHP</title>
</head>
<body>

    <h1>Sistema de Login</h1>

    <form action="dados.php" method="post">

        <label for="name">Nome de usuário:</label>

        <input type="text" id="name" name="name" required><br>

        <br> <br>

        <label for="password">Senha:</label>

        <input type="password" id="password" name="password" required><br>

        <br> <br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>