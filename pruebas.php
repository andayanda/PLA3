<?php
$paises = ["Francia" => "Paris", "Ecuador" => "Quito", "Gran Bretaña" => "Londres", "Italia" => "Roma","Argentina" => "Buenos Aires"];
foreach($paises as $valor){
    if(is_array($valor)){
        print_r($valor).'<br>';
    }
    else{
        echo "Este es un país: $valor";
        echo '<br>';
    }
}
print_r($paises);
$lista = [1,9,3,8,5,7];
foreach ($lista as $num){
    $num2=$num*2;
   
    echo "el doble de $num es $num2<br>";
}
foreach($paises as $clave =>$valor){
    echo "La capital de $clave es $valor";
    echo '<br>';
}
// $matriz1 = array(1,2,3,4,5,6,7,8,9);
// $matriz2= array(10,11,12,13,14,15,16,17,18);
// $matrizsuma= array();
// if (count($matriz1) == count($matriz2))
// for ($i=0;$i<count($matriz1);$i++)
// array_push($matrizsuma,($matriz1[$i]+$matriz2[$i]));
// // var_dump($matrizsuma);
// print_r($matriz1,);
// print_r($matriz2);
// print_r($matrizsuma);
// este formato funciona igual que el siguiente

// $matriz1 = [1,2,3,4,5,6,7,8,9];
// $matriz2= [10,11,12,13,14,15,16,17,18];
// $matrizsuma= [];
// if (count($matriz1) == count($matriz2))
// for ($i=0;$i<count($matriz1);$i++)
// array_push($matrizsuma,($matriz1[$i]+$matriz2[$i]));
// // var_dump($matrizsuma);
// print_r($matriz1,);
// print_r($matriz2);
// print_r($matrizsuma);

$matriz1 = [];
for ($i=0 ;$i<=9;$i++ )
array_push($matriz1,$i);

$matriz2= [];
for ($i>=11;$i<=19;$i++)
array_push($matriz2,$i);

$matrizsuma= [];
if (count($matriz1) == count($matriz2))
for ($i=0;$i<count($matriz1);$i++)
array_push($matrizsuma,($matriz1[$i]+$matriz2[$i]));
var_dump($matrizsuma);
print_r($matriz1,);
print_r($matriz2);
print_r($matrizsuma);


?>