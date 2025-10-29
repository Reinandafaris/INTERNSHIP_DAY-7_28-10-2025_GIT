<?php
// logic/array_logic.php

/* * File ini menyiapkan semua data/variabel
 * untuk ditampilkan di array.php
 */

// --- SOAL NO 1 ---
$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

// --- SOAL NO 2 ---
// Variabel untuk menampung jumlah array
$total_kids = count($kids);
$total_adults = count($adults);

// --- SOAL NO 3 ---
// Array multidimensi asosiatif
$characters = [
  [
    "Name" => "Will Byers",
    "Age" => 12,
    "Aliases" => "Will the Wise",
    "Status" => "Alive"
  ],
  [
    "Name" => "Mike Wheeler",
    "Age" => 12,
    "Aliases" => "Dungeon Master",
    "Status" => "Alive"
  ],
  [
    "Name" => "Jim Hopper",
    "Age" => 43,
    "Aliases" => "Chief Hopper",
    "Status" => "Deceased"
  ],
  [
    "Name" => "Eleven",
    "Age" => 12,
    "Aliases" => "El",
    "Status" => "Alive"
  ]
];
