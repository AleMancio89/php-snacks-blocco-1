<?php 
/*
PHP Snack 1 - PHP Loops

Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$matches = [
    'Match_1' => [
        'Home' => 'Olimpia Milano',
        'Away' => 'Cantù',
        'Score Home' => 55,
        'Score Away' => 60,
    ],
    'Match_2' => [
        'Home' => 'Dinamo Sassari',
        'Away' => 'Universo Treviso',
        'Score Home' => 88,
        'Score Away' => 76,
    ],
    'Match_3' => [
        'Home' => 'Virtus Bologna',
        'Away' => 'Brindisi',
        'Score Home' => 90,
        'Score Away' => 68,
    ],
    'Match_4' => [
        'Home' => 'Brescia',
        'Away' => 'Venezia',
        'Score Home' => 87,
        'Score Away' => 88,
    ],
];

for ($i = 0; $i < count($matches); $i++) {
    $keys = array_keys($matches);
    $match = $keys[$i];
    echo $matches[$match]['Home'] . ' - ' . $matches[$match]['Away'] . ' | ' . $matches[$match]['Score Home'] . '-' . $matches[$match]['Score Away'] . '<br>' ;
}


?>

<?php echo "<br> <br> <br>";?>

<?php 
/* 
PHP Snack 2
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if((strlen($name) > 3) && (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) && (is_numeric($age))) {
    echo 'Accesso consentito';
} else {
    echo 'Accesso NON consentito';
}

?>
