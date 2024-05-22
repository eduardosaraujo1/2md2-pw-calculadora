<?php
//receber o valor do formulário

$numero = $_POST['numero'];

//contador
$x = 1;

// while ($x <= 10) {

//     $result = $numero * $x;
//     // echo "$numero"."X"."$x"."="."$result";
//     echo "$numero"."x".$x."=$result";
//     echo "<br>";
//     $x++;
// }

for ($i = 0; $i <= 10; $i++) {
    $result = $numero * $i;
    // echo "$numero"."X"."$x"."="."$result";
    echo "$numero"."x".$i."=$result";
    echo "<br>";
}
?>