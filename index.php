<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="blocos">
        <h1>Cadastrar</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="processa.php">
                <div id="bloco1">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome"><br><br>
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite o e-mail"><br><br>
                <input type="submit" value="Cadastrar">
                </div>
        </div>
        </form>

    </body>

</html>