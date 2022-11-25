<?php
 include "conexao.php";
 if(isset($_POST['acao']))
 {
 $nome_jogador=$_POST['nome_jogador'];
 $sql=$pdo->prepare("INSERT INTO categorias VALUES(default,?)");
 $sql->execute(array($nome_jogador));
 echo "Jogador inserido com sucesso";
 }
?>
<!doctype html>
<html>
 <head>
     <link rel="stylesheet" href="style.css">
     <title>Cadastro de Categoria</title>
 </head>
 <body>
    <article>
        <form method="post">
        <input type="text" name="nome_jogador" required >
        <input type="submit" name="acao" value="Enviar">
        </form>
    </article>
    <p align="center"><a href="index.php">Voltar ao Hall</p>
 </body>
 </html>
