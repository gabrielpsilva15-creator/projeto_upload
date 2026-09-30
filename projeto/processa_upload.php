<?php

$pasta = "upload/";

$arquivo = $_FILES["arquivo"];

$nome = $arquivo["name"];
$temporario = $arquivo["tmp_name"];

if (move_uploaded_file($temporario, $pasta . $nome)) {

    echo "<h2>Imagem enviada com sucesso!</h2>";

    echo "<img src='{$pasta}{$nome}' width='300'>";

    echo "<br><br>";

    echo "<a href='index.php'>Voltar para a galeria</a>";

} else {

    echo "<h2>Erro ao enviar a imagem.</h2>";

    echo "<a href='upload.php'>Tentar novamente</a>";
}

?>