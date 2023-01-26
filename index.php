<?php

echo "<h2>Exercice 1 :<h2><br>";

$nb = 42;
echo $nb."<br>";

$str = '42';
echo $str."<br>";

$nbstring = "$nb";
echo $nbstring."<br>";

echo "<h2>Exercice 2 :<h2><br>";

$nb_tab = [45, 0.6, 35.2, 9, 18, 54.8];
print_r($nb_tab);
echo "<br>";

$str_tab = ["titi", "toto", "tata", "tutu"];
print_r($str_tab);
echo "<br>";

echo "<h2>Exercice 3 :<h2><br>";

$animal = [
        
        "species" => "Cat",
        "name" => "Mana",
        "age" => 4
        
    ];
    
print_r($animal);

echo "<h2>Exercice 4 :<h2><br>";

$data = 42;
$floatData = (float) $data;
$strFloat = (string) $floatData;

echo $data."<br>";
echo $floatData."<br>";
echo $strFloat."<br>";

echo "<h2>Exercice 5 :<h2><br>";

$animals =["Chat", "Chien", "Lapin", "Souris"];

$i = 0;
$tab = ["Chat", "Chien", "Lapin"];

while($i < count($tab))
{
    echo $tab[$i]."<br>";
    $i++;
}

echo "<h2>Exercice 6 :<h2><br>";

$numbers = [28,32,44,-67,18,24,-98];

for($i = 0; $i < count($numbers); $i++)
{
    if($numbers[$i] < 0){
        
        echo $numbers[$i]."<br>";
    }
}

echo "<h2>Exercice 7 :<h2><br>";

$user = [
        
        "firstname" => "Barack",
        "lastname" => "Obama"
    ];
    
echo "I'm {$user["firstname"]} {$user["lastname"]}, 44th POTUS.";

echo "<h2>Exercice 8 :<h2><br>";

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach($users as $user)
{
    echo "{$user["firstName"]} {$user["lastName"]}<br>";
}
    
?>