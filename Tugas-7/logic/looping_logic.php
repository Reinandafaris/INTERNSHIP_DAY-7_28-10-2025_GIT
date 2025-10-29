<?php
// logic/looping_logic.php

/* * File ini menyiapkan data dan fungsi
 * untuk ditampilkan di looping.php
 */

// --- SOAL NO 1 ---
// Kita buat fungsi yang mengembalikan string HTML
// agar file view tetap bersih.

function getLoopingPertama()
{
  $output = "LOOPING PERTAMA<br>";
  for ($i = 2; $i <= 20; $i += 2) {
    $output .= "$i - I Love PHP<br>";
  }
  return $output;
}

function getLoopingKedua()
{
  $output = "LOOPING KEDUA<br>";
  for ($i = 20; $i >= 2; $i -= 2) {
    $output .= "$i - I Love PHP<br>";
  }
  return $output;
}

// --- SOAL NO 2 ---
$numbers = [18, 45, 29, 61, 47, 34];
$rest = [];
foreach ($numbers as $num) {
  $rest[] = $num % 5;
}

// --- SOAL NO 3 ---
$items = [
  ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
  ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
  ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
  ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

$assoc_items = [];
foreach ($items as $item) {
  $assoc_items[] = [ // Kita tambahkan ke array baru
    "id" => $item[0],
    "name" => $item[1],
    "price" => $item[2],
    "description" => $item[3],
    "source" => $item[4]
  ];
}

// --- SOAL NO 4 ---
function getAsterixPola()
{
  $output = "Asterix:<br>";
  for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      $output .= "* ";
    }
    $output .= "<br>";
  }
  return $output;
}
