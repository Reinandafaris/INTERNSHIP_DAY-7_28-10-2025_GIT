<?php

require_once 'Animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");

$kodok = new Frog("buduk");
$kodok_action = $kodok->jump();

$sungokong = new Ape("kera sakti");
$sungokong_action = $sungokong->yell();

$animal_data = [
  'sheep' => $sheep,
  'frog' => [
    'data' => $kodok,
    'action' => $kodok_action
  ],
  'ape' => [
    'data' => $sungokong,
    'action' => $sungokong_action
  ]
];

return $animal_data;
