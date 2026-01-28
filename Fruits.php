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
$students =array(
    array('Džons', 20, (90+85+88)/3),
    array('Džena', 22, (92+80+84)/3),
    array('Džo', 21, (78+85+90)/3)
);

 for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $students[$i][$j]."\n";

    }
 }
 //uzd 4
 $students2 =array(
    array('Džons', 20, 90,85,88),
    array('Džena', 22, 92,80,84),
    array('Džo', 21, 78,85,90)
);
for($i=0;$i<3;$i++){
    for($j=0;$j<5;$j++){
        echo $students2[$i][$j]."\n";
    }
 }