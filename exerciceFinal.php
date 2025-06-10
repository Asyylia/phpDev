<?php
$state = 0;
echo "Bonjour aventurier, quel est ton nom ?\n";
$pseudo = readline();


while ($state != 1) {
    echo "Choisis ta classe, $pseudo : mage, voleur, hunt ? \n";
    $classe = readline();
    break;
}
if ($classe == 'hunt' || $classe == 'mage' || $classe == 'voleur') {
    echo "Prépare toi, $pseudo, maitre des $classe. ";
    echo "Entre 'ok' pour continuer\n";
}
;

$ok = readline();
if ($ok == "ok") {
    echo "...";
} else if ($ok !== "ok") {
    echo "Tu me défie ? Entre 'ok' ;)\n";
}
;
if ($ok == "ok") {
    echo "Tu rentres dans le royaume, devant toi un dragon apparait, lance un dé pour connaitre ton destin.";
    function dropdice()
    {
        echo "\nTu as fais un " . rand(1, 6) . ".";
    }
    dropdice();
    $state = 2;
    ;
}
;

echo "Le dragon s'envole et menace de te brûler, tu as 3 options : ";
function askQuestion()
{
                switch{
                case 0:
                    echo 'Tu prends peur';
                    break;
                case 1:
                    echo 'Tu attaques';
                    break;
                case 2:
                    echo 'Tu te protèges';
                    break;
                }
}
askQuestion();
