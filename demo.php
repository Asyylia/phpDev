<?php
// -------------------------------------------------------------------------------------
// Insérer des variables
// $prenom1 = 'Morgane';
// $age = 31;
// $note1 = 12;
// $note2 = 20;
// $moyenne = ($note1 + $note2) / 2;
// echo "Je m'appelle $prenom1 j'ai $age ans. \n Voici ma moyenne : $moyenne";


// -------------------------------------------------------------------------------------
// Fabriquer un tableau, et l'appeler ( imprimer en entier dans la console)
// $tableau = [
//     'nom' => 'Morgane',
//     'age' => 31,
//     'ville' => 'Cordonnet',
// ];
// $tableau['copain'] = 'Eren';
// echo $tableau['nom'];
// print_r($tableau);


// -------------------------------------------------------------------------------------
// Fabriquer un tableau à plusieurs niveaux et selectionner la note 3 de l'eleve3
// $tableau = [
//     'eleve1' =>
//         [
//             'note1' => 12,
//             'note2' => 14,
//             'note3' => 6,
//         ],
//     'eleve2' =>
//         [
//             'note1' => 14,
//             'note2' => 16,
//             'note3' => 10,
//         ],
//     'eleve3' =>
//         [
//             'note1' => 8,
//             'note2' => 20,
//             'note3' => 5,
//         ]
// ];

// echo $tableau['eleve3']['note3'];


// -------------------------------------------------------------------------------------
// Conditions, si on tapes 12, on a bravo
// $input = (int) readline("ecrivez quelque chose \n");

// if ($input === 12) {
//     echo 'bravo !';
// }


// -------------------------------------------------------------------------------------
// Changement d'état
// $input = readline("ecrivez quelque chose \n");

// switch ($input) {
//     case 'morgane':
//         echo "votre prénom = $input";
//         break;
//     default:
//         echo "commande inconnue";
// }

// -------------------------------------------------------------------------------------
//  Horaires d'ouverture
// $heure = readline("ecrivez quelque chose \n");

// if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
//     echo "Magasin ouvert";
// } else {
//     echo "Magasin fermé";
// }


// -------------------------------------------------------------------------------------
//  Horaires d'ouverture mais méthode d'inversement
// $heure = readline("ecrivez quelque chose \n");

// if (!(9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
//     echo "Magasin ouvert";
// } else {
//     echo "Magasin fermé";
// }

// -------------------------------------------------------------------------------------
//  Horaires d'ouverture mais autre méthode d'inversement
// $heure = readline("ecrivez quelque chose \n");

// if ((9 > $heure || $heure > 12) && (14 > $heure || $heure > 17)) {
//     echo "Magasin ouvert";
// } else {
//     echo "Magasin fermé";
// }

// -------------------------------------------------------------------------------------
// Entrer un MDP
// echo 'mot de passe : ';
// $input = readline("ecrivez quelque chose");

// while ($input !== 12) {
//     if ($input == 'eren') {
//         echo 'good';
//     }
// }

// -------------------------------------------------------------------------------------
// Conditions
// $input = readline("ecrivez quelque chose");

// for ($i = 0; $i <= 10; $i = $i +=2 );

// -------------------------------------------------------------------------------------
// Choisir un élèment dans un tableau profondément
// $classes = [
//     [
//         'prenom' => 'morgane',
//         'note' => '12',
//     ],
//     [
//         'prenom' => 'eren',
//         'note' => '14',
//     ]
// ];
// foreach ($classes as $eleve => $note) {
//     print_r($note['prenom']);
// }
