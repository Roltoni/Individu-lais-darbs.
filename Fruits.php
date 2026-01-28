<?php
$Fruits =["Ābols","Banāns", "Ķirsis", "Dateles"];

echo $Fruits[1]."\n";
//uzd2

$ages =[
    "Alise" => 30,
    "Bobs" => 25,
    "Čārlijs" => 35
];


echo $ages["Bobs"]."\n";

//uzd3
$students =[
    array('Džons', 20, (90+85+88)/3),
    array('Džena', 22, (92+80+84)/3),
    array('Džo', 21, (78+85+90)/3)
];

 for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $students[$i][$j]."\n";

    }
 }
 //uzd 4
 $students2 =[
    array('Džons', 20, 90,85,88),
    array('Džena', 22, 92,80,84),
    array('Džo', 21, 78,85,90)
 ];
for($i=0;$i<3;$i++){
    for($j=0;$j<5;$j++){
        echo $students2[$i][$j]."\n";
    }
 }


 //uzd5
$assocAnimal = [
    "dzivnieks" => "lauva", "weight" => 250,"klase" => "ziditajs", "laupijums" => ["gazele", "zebra"]
];

$animals = [
    $assocAnimal,
    ["dzivnieks" => "vilks","weight" => 40,"klase" => "ziditajs","laupijums" => ["zaķis", "stirna"]],
    ["dzivnieks" => "ērglis","weight" => 6,"klase" => "putns","laupijums" => ["pele", "zivs"]]
];
foreach ($animals as $animal) {
    var_dump($animal);
}
//uzd 6
$colors=['red', 'blue', 'green', 'yellow'];
// echo "Colors:";
// foreach($colors as $color){
//     echo $color.", ";
// }
// $result= "Colors: ";
// foreach($colors as $color){
//    $result =$result. $color.", ";
// }

// echo $result;
echo "Colors: ";
for ($i = 1; $i < count($colors); $i++) {
    echo $colors[$i-1].", ";
    if($i == count($colors)-1){
        echo $colors[$i].".";
    }
}
echo "\n";
///////////////////////////////////////////
echo "Colors: ";
for ($i = 0; $i < count($colors); $i++) {
    if ($i > 0) {
        echo ", ";      
    }
    
    echo $colors[$i];
}
echo ".";
//Chat gpt ^