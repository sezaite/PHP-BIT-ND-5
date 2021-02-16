<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

'<br><br>-------PIRMA UZDUOTIS------------<br><br>';
echo '<br><h1> PIRMA </h1><br>';
$masyvas = array_fill(0, 10, array_fill(0, 5, 0));
echo '<pre>';
print_r($masyvas);

foreach($masyvas as $isorinisKey => $vidinisMasyvas){
    foreach($vidinisMasyvas as $key => $value){
        $masyvas[$isorinisKey][$key] = rand(5, 25);
    } 
    unset($value);
}
unset($vidinisMasyvas);

print_r($masyvas);

'<br><br>-------ANTRA UZDUOTIS------------<br><br>';
// A) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<br><h1> ANTRO A </h1><br>';
$didesniuNei10 = 0;
foreach($masyvas as $isorinisKey => $vidinisMasyvas){
    foreach($vidinisMasyvas as $key => $value){
        if($masyvas[$isorinisKey][$key] > 10){
            $didesniuNei10++;
        }
    } 
    unset($value);
} 
unset($vidinisMasyvas);

echo "didesniu nei desimt elementu yra: $didesniuNei10 <br><br>";

// B) Raskite didžiausio elemento reikšmę;
echo '<br><h1> ANTRO B </h1><br>';
$didziausiasMasyve = $masyvas[0][0];
foreach($masyvas as $isorinisKey => $vidinisMasyvas){
    // if ($didziausiasMasyve < max($vidinisMasyvas)){
    //     $didziausiasMasyve = max($vidinisMasyvas);
    // }
    $didziausiasMasyve = $didziausiasMasyve < max($vidinisMasyvas) ? max($vidinisMasyvas) : $didziausiasMasyve;
} 
unset($vidinisMasyvas);
echo "didziausia reiksme sioje strukturoje yra: $didziausiasMasyve <br><br>";

// C) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<br><h1> ANTRO C </h1><br>';
$nuliniuSuma = 0;
$vienetuSuma = 0;
$dvejetuSuma = 0;
$trejetuSuma = 0;
$ketvirtujuSuma = 0;

foreach($masyvas as $isorinisKey => $vidinisMasyvas){
    foreach($vidinisMasyvas as $key => &$value){
        switch($key){
            case 0:
                $nuliniuSuma += $value;
                break;
            case 1:
                $vienetuSuma += $value;
                break;
            case 2:
                $dvejetuSuma += $value;
                break;
            case 3:
                $trejetuSuma += $value;
                break;
            case 4:
                $ketvirtujuSuma += $value;
                break;
        }
    } 
    unset($value);
} 
unset($vidinisMasyvas);

echo "nuliniu indeksu reiksmiu suma yra: $nuliniuSuma, vienetu indeksu reiksmiu suma yra: $vienetuSuma, dvejetu indeksu reiksmiu suma yra: $dvejetuSuma, trejetu indeksu reiksmiu suma yra: $trejetuSuma, ketvertu indeksu reiksmiu suma yra: $ketvirtujuSuma <br><br>";

// D) Visus masyvus “pailginkite” iki 7 elementų
echo '<br><h1> ANTRO D </h1><br>';

foreach($masyvas as &$vidinisMasyvas){
    array_push($vidinisMasyvas, rand(5, 25), rand(5, 25));
} 
unset($vidinisMasyvas);
print_r($masyvas);

// E) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo '<br><h1> ANTRO E </h1><br>';
array_push($masyvas, []);
foreach($masyvas as $antrojoArrIndex => &$antrojoArrReiksme){
   array_push($masyvas[array_key_last($masyvas)], array_sum($antrojoArrReiksme));
}

print_r($masyvas);