<?php
$tableau = [
    [
        'prenom' => 'morgane',
        'age' => 32,
    ],
    [
        'prenom' => 'eren',
        'age' => 4,
    ],
    [
        'prenom' => 'steph',
        'age' => 35,
    ]
];


foreach ($tableau as $eleve => $prenom) {
    if ($prenom['prenom'] === 'eren') {
        echo $prenom['age'] . " ";
    }

}
if ($tableau[1]['age'] === 4) {
    echo 'good' . " ";
}

$input = readline('quel est ton age?');
while ($input == 4) {
    echo 'Tu as ton age';
    break;
}
