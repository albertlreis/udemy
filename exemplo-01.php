<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileupload">

    <button type="submit">Enviar</button>

</form>

<hr>


<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);


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
?>

<img src="<?=$basename?>">
