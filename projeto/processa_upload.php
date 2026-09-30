<?php

$pasta = "upload/";

if (isset($_FILES["arquivo"])) {

    $arquivo = $_FILES["arquivo"];

    $nome = basename($arquivo["name"]);
    $temporario = $arquivo["tmp_name"];

    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    $extensoesPermitidas = array("jpg", "jpeg", "png", "gif");

    if (in_array(strtolower($extensao), $extensoesPermitidas)) {

        if (move_uploaded_file($temporario, $pasta . $nome)) {

            echo "<h2>Imagem enviada com sucesso!</h2>";

            echo "<img src='{$pasta}{$nome}' width='300'>";

            echo "<br><br>";

            echo "<a href='index.php'>Voltar para a galeria</a>";

        } else {

            echo "<h2>Erro ao enviar a imagem.</h2>";
        }

    } else {

        echo "<h2>Formato de imagem não permitido.</h2>";
        echo "<p>Use JPG, JPEG, PNG ou GIF.</p>";
    }

} else {

    echo "<h2>Nenhuma imagem foi selecionada.</h2>";

}

?>