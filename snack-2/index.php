

<?php /*Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” */

$_GET [
  "name"
];

$_GET [
  "mail"
];

$_GET [
  "age"
];


if (strlen($_GET["name"]) > 3 && strpos($_GET["mail"], "@") && strpos($_GET["mail"], ".") && is_numeric($_GET["age"])) {
  echo "Accesso riuscito";
} else {
  echo "Accesso negato";
}

?>
