<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Viualizar</title>
    </head>
    <body>
        <?php
            include "conexao.php";
            echo"<p>Olha ai todos os jogadores</p>";
            $sql=$pdo->prepare("SELECT * FROM categorias ORDER BY id ASC");
            $sql->execute();
            $info=$sql->fetchAll();
            echo 'se você tá vendo isso é porque não tem jogador registrado';
            echo '<br><br><br>brincadeira, o Arrascaeta tá aqui<br>'
        ?>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPp96j90-R3dxvd0GW3biTWV3b_PYM58GsbA&usqp=CAU">
        <p align="center"><a href="index.php">Voltar ao Hall</a></p>
    </body>
</html>
