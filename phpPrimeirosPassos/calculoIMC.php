<?php

$peso = 56;
$altura = 1.74;
$ImcCalculo = $peso / ($altura ** 2);

if ($ImcCalculo< 18.5) {
echo "IMC= $ImcCalculo Magreza";

} else if($ImcCalculo >= 18.5 && $ImcCalculo <= 24.9) {

       echo "IMC= $ImcCalculo normal";

} else if ($ImcCalculo >= 25 && $ImcCalculo<=29.9) {

    echo "IMC = $ImcCalculo sobrepeso";

} else if($ImcCalculo >= 30 && $ImcCalculo <= 34.9) {

    echo " IMC= $ImcCalculo Obesidade grau 1";

} else if ($ImcCalculo >= 35 && $ImcCalculo<=40) {

    echo "IMC= $ImcCalculo obesidade grau 2";

} else {
    
    echo "IMC = $ImcCalculo obsidade grau 3";
}

?>