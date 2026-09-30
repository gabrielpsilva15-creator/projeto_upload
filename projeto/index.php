<h1>galeria de imagens</h1>
<a href="upload.php">Enviar nova imagem</a>

<hr>

<h2>Imagens enviadas</h2>

<div style="display: flex; flex-wrap: wrap; gap: 10px;">

<?php

$pasta = "upload/";

if (is_dir($pasta)) {

    $arquivos = scandir($pasta);

    foreach ($arquivos as $arquivo) {

        if ($arquivo != "." && $arquivo != "..") {

            echo "
            <div>
                <img src='{$pasta}{$arquivo}' width='200'>
            </div>
            ";
        }
    }

} else {

    echo "A pasta de upload não existe.";
}

?>

</div>