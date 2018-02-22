<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileupload">

    <button type="submit">Enviar</button>

</form>

<hr>


<?php

/* Download de Arquivos */

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

/* Download de Arquivos */


/* Upload de Arquivos */

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $file = $_FILES['fileupload'];

    if ($file["error"]){

        throw new Exception("Error: ".$file["error"]);

    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)){

        mkdir($dirUploads);

    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

        echo "Upload realizado com sucesso";

    } else {

        throw new Exception("Não foi possível realizar o upload.");

    }

}

/* Upload de Arquivos */

/* Renomeando Arquivos*/

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

}

rename(
        $dir1 . DIRECTORY_SEPARATOR . $filename,
        $dir2 . DIRECTORY_SEPARATOR . $filename
);

/* Renomeando Arquivos*/


?>