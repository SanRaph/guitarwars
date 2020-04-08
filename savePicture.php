<?php
$name = $_POST["name"];
$image = $_POST["image"]


$decodedImage = base64_dedode("$image");
file_put_contents("pictures/" .$name .".jpg", $decodedImage);

?>