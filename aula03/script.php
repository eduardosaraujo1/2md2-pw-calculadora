<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$media = ($nota1 + $nota2) / 2;

if ($media > 7) {
    echo "Aprovado, $media<br>";
    echo '<img style="width: 256px" src="./feliz.png" alt="">';
} 
elseif ($media >= 5) {
    echo "Reculperação, $media<br>";
}
else {
    echo "Reprovado, $media<br>";
    echo '<img style="width: 256px" src="./triste.png" alt="">';
}

?>
</body>
</html>