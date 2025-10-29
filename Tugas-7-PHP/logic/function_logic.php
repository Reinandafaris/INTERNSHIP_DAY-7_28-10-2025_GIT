<?php
// logic/function_logic.php

/* * File ini mendefinisikan semua fungsi
 * yang akan dipanggil di function-conditional.php
 */

// --- SOAL NO 1 ---
// Fungsi diubah agar me-RETURN string, bukan echo
function greetings($nama)
{
  return "Halo $nama, Selamat Datang di Sanbercode!<br>";
}

// --- SOAL NO 2 ---
function reverseString($str)
{
  $reversed = "";
  $length = strlen($str);
  for ($i = ($length - 1); $i >= 0; $i--) {
    $reversed .= $str[$i];
  }
  return $reversed . "<br>"; // Kembalikan string yang sudah dibalik
}

// --- SOAL NO 3 ---
function palindrome($str)
{
  // Logic reverse string
  $reversed = "";
  $length = strlen($str);
  for ($i = ($length - 1); $i >= 0; $i--) {
    $reversed .= $str[$i];
  }

  // Pengecekan palindrome
  if ($str == $reversed) {
    return "($str) => true<br>";
  } else {
    return "($str) => false<br>";
  }
}

// --- SOAL NO 4 ---
function tentukan_nilai($nilai)
{
  if ($nilai >= 85 && $nilai <= 100) {
    return "($nilai) => Sangat Baik<br>";
  } else if ($nilai >= 70 && $nilai < 85) {
    return "($nilai) => Baik<br>";
  } else if ($nilai >= 60 && $nilai < 70) {
    return "($nilai) => Cukup<br>";
  } else {
    return "($nilai) => Kurang<br>";
  }
}
