<?php

//Hello
$name = isset($_GET["name"]) ? $_GET["name"] : "World";
echo "Hello $name!<br/><hr/>";

// gerade-ungerade
for ($i = 0; $i <= 5; $i++) {
    if (($i % 2) == 0)
        echo "$i - gerade<br/>";
    else
        echo "$i - ungerade<br/>";
}

echo "<hr/>";

// Zahlenfolge
$stop = $_GET["stop"];
if (!$stop)
    $stop = 5;

for ($i = 1; $i <= $stop; $i++) {
    echo $i;
}

echo "<hr/>";

// Capitals
$capitals = [
    "Germany" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome",
];

foreach ($capitals as $land => $city) {
    echo "The capital of $land  is $city.<br/>";
}

echo "<hr/>";

// Server-ID und IP
$identification = $_SERVER['SERVER_SOFTWARE'];
$ip = $_SERVER['SERVER_ADDR'];
echo "server identification: " . $identification . "<br/> your ip: " . $ip;