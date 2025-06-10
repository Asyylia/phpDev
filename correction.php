<?php
// Fonction qui attends que l'input corresponde à "suivant"
function waitForEnter($msg = "Tape 'suivant' pour continuer...")
{
    do {// do éxécute une fois avant la condition de while
        $input = strtolower(trim(readline("$msg "))); // passe l'input en minuscule
    } while ($input !== 'suivant'); // tant que l'input ne correspond pas à "suivant"
}

function askQuestion($question, $answers, $correct)
{
    echo "\n $question\n"; // affiche la question
    foreach ($answers as $key => $ans) { //parcourir les réponses
        echo " [$key] $ans\n"; // et afficher les réponses
    }
    $choice = strtolower(trim(readline("Ton choix : ")));
    return $choice === $correct; // si la réponse est correcte, on retourne la réponse
}


// ETAPE 1 : INITIALISATION----------------------------------------------------------------------
echo "Bienvenue dans l'arène !'";
$pseudo = readline("Quel est ton pseudo, aventurier ? ");
$type = readline("Quel type de joueur es-tu ? ( guerrier / chasseur / mage ) :");
echo "\nBienvenue, $pseudo le $type !\n";
// ----------------------------------------------------------------------------------------------


// ETAPE 2 : SCENARIO
echo "\nUne brume épaisse recouvre le royaume de Valdrak...\n";
waitForEnter();
echo "Une voix mystérieuse s'élève dans l'ombre\n";
waitForEnter();
echo "\"$pseudo... Toi seul peux affronter le chaos et vaincre le Boss maudit...\"\n";
waitForEnter();
// ----------------------------------------------------------------------------------------------



//  ETAPE 3 : LANCER DE DES ---------------------------------------------------------------------
echo "\n Lancer de dé pour déterminer ton destin...\n";
$dice = rand(1, 3); // rendre aléatoire un lancer de dé entre 1 et 6 
echo "Le dé roule... Résultat : $dice\n";
// ----------------------------------------------------------------------------------------------
$ok = "";
switch ($dice) {
    case 1:
        echo "\n Tu tombes sur une embuscade de gobelins ! \n";
        $ok = askQuestion(
            "Quel est le point faible des gobelins ? ",
            [
                'a' => 'Le feu',
                'b' => 'La glace',
                'c' => 'Les bananes'
            ],
            'a'
        );
        break;
    case 2:
        echo "\n Tu tombes sur une embuscade de gobelins ! \n";
        $ok = askQuestion(
            "Quel est le point faible des gobelins ? ",
            [
                'a' => 'Le feu',
                'b' => 'La glace',
                'c' => 'Les bananes'
            ],
            'a'
        );
        break;
    case 3:
        echo "\n Tu tombes sur une embuscade de gobelins ! \n";
        $ok = askQuestion(
            "Quel est le point faible des gobelins ? ",
            [
                'a' => 'Le feu',
                'b' => 'La glace',
                'c' => 'Les bananes'
            ],
            'a'
        );
        break;
}

echo $ok ? "\n Bonne réponse ! \n" : "\n Mauvaise réponse, vaillant $type.\n"; // le ? est un raccourci de if

waitForEnter("\n Prépare-toi... Le boss approche... Tape 'suivant'");

// ETAPE 4 : COMBAT FINAL------------------------------------------------------------------------
echo "\n Le boss maudit apparaît dans un éclair de ténèbres ! ";
waitForEnter();
// ----------------------------------------------------------------------------------------------

$bossQuestion = askQuestion(
    "Dernière épreuve : Quelle est la faibless du boss maudit ? ",
    ['a' => "L'eau bénite", 'b' => "La lumière du jour", 'c' => "Les blagues nulles"],
    'b'
);

if ($bossQuestion) {
    echo "\n Victoire ! Tu as vaincu le boss maudit $pseudo, le $type !";
} else {
    echo "Le boss maudit te terrasse... Tu reviendras plus fort, $pseudo.";
}

echo "Merci d'avoir joué.";