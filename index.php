<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

'<br><br>-------PIRMA UZDUOTIS------------<br><br>';
echo '<br><h1> PIRMA </h1><br>';
// $masyvas = array_fill(0, 10, array_fill(0, 5, 0));
echo '<pre>';
// print_r($masyvas);

// $masyvas = [];
foreach(range(1, 10) as $isorinisKey => $vidinisMasyvas){
    foreach(range(1, 5) as $key => $value){
        $masyvas[$isorinisKey][] = rand(5, 25);
    } 
}

// print_r($masyvas); <--------------------------------------------------------------

'<br><br>-------ANTRA UZDUOTIS------------<br><br>';
// A) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<br><h1> ANTRO A </h1><br>';
$didesniuNei10 = 0;
foreach($masyvas as $vidinisMasyvas){
    foreach($vidinisMasyvas as $value){
        if($value > 10){ //sita galima tiesiog pakeisti i $value
            $didesniuNei10++;
        }
    } 
    
} 


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

foreach($masyvas as $vidinisMasyvas){
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
// unset($vidinisMasyvas);  ??

echo "nuliniu indeksu reiksmiu suma yra: $nuliniuSuma, vienetu indeksu reiksmiu suma yra: $vienetuSuma, dvejetu indeksu reiksmiu suma yra: $dvejetuSuma, trejetu indeksu reiksmiu suma yra: $trejetuSuma, ketvertu indeksu reiksmiu suma yra: $ketvirtujuSuma <br><br>";

// D) Visus masyvus “pailginkite” iki 7 elementų
echo '<br><h1> ANTRO D </h1><br>';

foreach($masyvas as &$vidinisMasyvas){
    $vidinisMasyvas[] = rand(5, 25);
    $vidinisMasyvas[] = rand(5, 25); /////////////KAP CE PADARYT i viena eiliute??????????
} 

//PUSH VERSIJA:

// foreach($masyvas as &$vidinisMasyvas){
//     array_push($vidinisMasyvas, rand(5, 25), rand(5, 25));
// }  


unset($vidinisMasyvas);
// print_r($masyvas); <----------------------------------------------------------------

// E) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo '<br><h1> ANTRO E </h1><br>';

//NESUPRANTU KODEL VEIKIANTIS:
$masyvas[] = [];
foreach($masyvas as &$antrojoArrReiksme){
   array_push($masyvas[array_key_last($masyvas)], array_sum($antrojoArrReiksme));
}
unset($antrojoArrReiksme);
// print_r($masyvas); <---------------------------------------------------------------------

//NESUPRANTU KODEL NEVEIKIANTIS:
// foreach($masyvas as &$antrojoArrReiksme){
//     $masyvas[] = array_sum($antrojoArrReiksme);
// }
// unset($antrojoArrReiksme);
// print_r($masyvas);

//IRGI NEVEIKIANTIS(BE PUSH):
// $masyvas[] = [];
// foreach($masyvas as &$antrojoArrReiksme){
//    $masyvas[array_key_last($masyvas)] = array_sum($antrojoArrReiksme);
// }
// unset($antrojoArrReiksme);
// print_r($masyvas);


echo '<br><h1> TRECIAS </h1><br>';
// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

for ($i = 0; $i < 10; $i++){
    $antrasMasyvas = rand(2, 20);
    for ($j = 0; $j < $antrasMasyvas; $j++){
        $raidziuMasyvas[$i][] = chr(rand(65, 90));
    }
}
// print_r($raidziuMasyvas); <-----------------------------------------------------------------

foreach ($raidziuMasyvas as &$value){
    sort($value, SORT_STRING);
}
unset($value);
// print_r($raidziuMasyvas); <-----------------------------------------------

echo '<br><h1> KETVIRTAS </h1><br>';
// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.

usort($raidziuMasyvas, function($a, $b){
    return count($a) <=> count($b);
});

// print_r($raidziuMasyvas); <----------------------------------------------------------

echo '<br><h1> PENKTAS . . . </h1><br>';

// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

for($i = 0; $i < 30; $i++){
    $idMasyvas[$i] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];    
}
// print_r($idMasyvas); <--------------------------------------------------------

echo '<br><h1> . . .SHESHI . . . </h1><br>';
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

usort($idMasyvas, function($a, $b){
    return $a['user_id'] <=> $b['user_id'];
});

// print_r($idMasyvas); <----------------------------------------------------------------------

usort($idMasyvas, function($a, $b){
    return $b['place_in_row'] <=> $a['place_in_row'];
});

// print_r($idMasyvas); <-----------------------------------------------------------------------

echo '<br><h1> . . .SiapTYNI . . . </h1><br>';
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

for($i = 0; $i < count($idMasyvas); $i++){
    $randomVardoIlgis = rand(5, 15);
    $randomArr = [];
    for ($j = 0; $j < $randomVardoIlgis; $j++){
        $randomArr[$j] = chr(rand(65, 90)); 
    }
    $vardas = implode('', $randomArr);
    $idMasyvas[$i]['name'] = $vardas;
////pavardes
    $randomPavardesIlgis = rand(5, 15);
    $randomArr = [];
    for ($j = 0; $j < $randomPavardesIlgis; $j++){
        $randomArr[$j] = chr(rand(65, 90)); 
    }
    $vardas = implode('', $randomArr);
    $idMasyvas[$i]['surname'] = $vardas;
    
}
// print_r($idMasyvas); <-------------------------------------------

echo '<br><h1> . . .8 .8. 8. 8.. 8 . . . </h1><br>';
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

$masyvas = [];
for($i = 0; $i < 10; $i++){
    $masyvoIlgis = rand(0, 5);
    if ($masyvoIlgis === 0){
        $masyvas[$i] = rand(0, 10);
    } else {
        for ($j = 0; $j < $masyvoIlgis; $j++){
            $masyvas[$i][] = rand(0, 10);
        }
    }
}
// print_r($masyvas); <-------------------------------------

// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

echo '<br><h1> . . .deVynTaS . . . </h1><br>';

foreach($masyvas as $key => $antroLygioMasyvas){
    if (is_array($antroLygioMasyvas)){
        foreach ($antroLygioMasyvas as $key2 => $value){
            
        }

    }
}