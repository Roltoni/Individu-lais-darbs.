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
$result = 0;
$result2 = 0;
$result3 = 0;
$students =array(
    array('Džons', 20, [90+85+88/3=>$result]),
    array('Džena', 22, [92+80+84/3=>$result2]),
    array('Džo', 21, [$result3<=(78+85+90)/3=>$result3])
);

 for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $students[$i][$j];

    }
 }