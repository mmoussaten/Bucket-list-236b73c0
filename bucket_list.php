<?php
$stacks = array();
echo "Hoe veel activiteiten wil je toevoegen?" . PHP_EOL ;
$antwoord=readline();


for ($i = 0 ; $i < $antwoord ; $i ++) {
    echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
    $stacks[$i] = readline();

}
{
    $antwoord=readline("");
    if(is_numeric($antwoord)){

    } else {
        echo "is geen getal, probeer het opnieuw";
    }
}

    echo "Op jouw bucket list staat:\n";
    for ($i = 0; $i < count($stacks); $i++) {
        echo $stacks[$i] . PHP_EOL;

}


