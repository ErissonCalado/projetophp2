<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<body>
    <title> Login de Usuário </title>
    </head>

    <body>
        <form method="POST" action="login.php">
            <label>Login:</label><input type="text" name="login" id="login"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
            <input type="submit" value="entrar" id="entrar" name="entrar"><br>
            <a href="cadastro.php">Cadastre-se</a>
        </form>

    </body>

</html>