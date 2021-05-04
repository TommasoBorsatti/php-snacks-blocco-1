
<?php /*Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 */

$matches = [

  [
    "squadraCasa" => "Morbidelli Decar",
    "squadraOspite" => "Bohr Team",
    "puntiCasa" => 22,
    "puntiOspite" => 50,
  ],
  [
    "squadraCasa" => "Ciccini Virtus",
    "squadraOspite" => "Bomber80",
    "puntiCasa" => 57,
    "puntiOspite" => 90,
  ],
  [
    "squadraCasa" => "Sogliolini Pro",
    "squadraOspite" => "Finuzzi Enterprise",
    "puntiCasa" => 10,
    "puntiOspite" => 80,
  ],
  [
    "squadraCasa" => "Squadra Fortissimi",
    "squadraOspite" => "Roccuzzo Brothers",
    "puntiCasa" => 66,
    "puntiOspite" => 33,
  ],

];

foreach ($matches as $dato) {
  echo $dato["squadraCasa"] . " - " . $dato["squadraOspite"] . " | " . $dato["puntiCasa"] . " - " . $dato["puntiOspite"] . "<br>";
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
