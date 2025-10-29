<?php
// logic/string_logic.php

/* * File ini menyiapkan semua data/variabel
 * untuk ditampilkan di string.php
 */

// --- SOAL NO 1 ---
$first_sentence = "Hello PHP!";
$first_len = strlen($first_sentence);
$first_words = str_word_count($first_sentence);

$second_sentence = "I'm ready for the challenges";
$second_len = strlen($second_sentence);
$second_words = str_word_count($second_sentence);

// --- SOAL NO 2 ---
$string2 = "I love PHP";
$kata_pertama_2 = substr($string2, 0, 1);
$kata_kedua_2 = substr($string2, 2, 4);
$kata_ketiga_2 = substr($string2, 7, 3);

// --- SOAL NO 3 ---
$string3 = "PHP is old but sexy!";
$string3_output = str_replace("sexy!", "awesome", $string3);
