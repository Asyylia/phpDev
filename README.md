# Mise en place 
Je crée 3 fichiers .php sur VisualStudioCode

# Exercice 1 : 
Je dois inclure de la concaténation et une moyenne dans le code PHP

```
$prenom = 'Morgane';
$age1 = 20;
$age2 = 10;
$moyenne = ($age1 + $age2) / 2;

for ($m = 0; $m <= 15; $m = $m += 2)
    ;

echo "Je m'appelle $prenom, j'ai une moyenne de : $moyenne ans et mon incrément est $m";
```

# Exercice 2 : 
Je dois parcourir un tableau, et utiliser un for et un while

```
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

```

# Exercice final : 
## Création d'un petit jeu vidéo
J'y inclus : 
- des fonctions :
  - waitforEnter
  - askQuestion
- utilisation du random avec le dé
- le switch

Améliorations à venir : 
Ajouter du lore ; 
Ajouter des points de vie avec un for et une fonction
