<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'Bob';
$stop = isset($_GET['stop']) ? $_GET['stop'] : 5;

hello($name);
echo '<hr/>';
quadrat($stop);
echo '<hr/>';

for($i = 0; $i <= $stop; $i++) {
    echo 'Die Fakult&auml;t von ' . $i . ' ist ' . fakultaet($i) . '<br/>';
}
echo '<hr/>';

// Funktionen
// Hello
function hello($name)
{
    echo 'Hello World!<br/>';
    echo 'Hello ' . $name . '!<br/>';
}

// Quadratzahlen
function quadrat($stop)
{
    for ($i = 0; $i <= $stop; $i++) {
        echo 'Die Quadratzahl von ' . $i . ' ist ' . $i * $i . '<br/>';
    }
}

// Fakultät
function fakultaet($stop)
{
    if($stop == 0)
        return 0;
    if($stop > 1)
        return $stop * fakultaet($stop - 1);
    return 1;
}