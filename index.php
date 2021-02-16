<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.


// Naudodamiesi 1 uždavinio masyvu:
// Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// Raskite didžiausio elemento reikšmę;
// Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
// Visus masyvus “pailginkite” iki 7 elementų
// Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

'<br><br>-------PIRMA UZDUOTIS------------<br><br>';

$masyvas = array_fill(0, 10, array_fill(0, 5, 0));
echo '<pre>';
print_r($masyvas);

foreach($masyvas as $isorinisKey => $vidinisMasyvas){
    foreach($vidinisMasyvas as $key => $value){
        $masyvas[$isorinisKey][$key] = rand(5, 25);
    }
}

print_r($masyvas);


'<br><br>-------ANTRA UZDUOTIS------------<br><br>';