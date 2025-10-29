<?php
// 1. Include file logic
include 'logic/function_logic.php';

// 2. Tentukan halaman ini sebagai halaman aktif
$current_page = 'function-conditional.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Function PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container">
    <nav>
      <ul>
        <li><a href="string.php" class="<?= ($current_page == 'string.php') ? 'active' : '' ?>">String</a></li>
        <li><a href="array.php" class="<?= ($current_page == 'array.php') ? 'active' : '' ?>">Array</a></li>
        <li><a href="looping.php" class="<?= ($current_page == 'looping.php') ? 'active' : '' ?>">Looping</a></li>
        <li><a href="function-conditional.php" class="<?= ($current_page == 'function-conditional.php') ? 'active' : '' ?>">Function</a></li>
      </ul>
    </nav>

    <div class="content">
      <h1>Berlatih Function & Conditional PHP</h1>

      <div class="soal-container">
        <h3> Soal No 1 Greetings </h3>
        <?php
        // Panggil fungsi dari file logic
        echo greetings("Bagas");
        echo greetings("Wahyu");
        echo greetings("nama peserta");
        ?>
      </div>

      <div class="soal-container">
        <h3>Soal No 2 Reverse String</h3>
        <?php
        echo reverseString("nama peserta");
        echo reverseString("Sanbercode");
        echo reverseString("We Are Sanbers Developers");
        ?>
      </div>

      <div class="soal-container">
        <h3>Soal No 3 Palindrome </h3>
        <?php
        echo palindrome("civic"); // true
        echo palindrome("nababan"); // true
        echo palindrome("jambaban"); // false
        echo palindrome("racecar"); // true
        ?>
      </div>

      <div class="soal-container">
        <h3>Soal No 4 Tentukan Nilai </h3>
        <?php
        echo tentukan_nilai(98); //Sangat Baik
        echo tentukan_nilai(76); //Baik
        echo tentukan_nilai(67); //Cukup
        echo tentukan_nilai(43); //Kurang
        ?>
      </div>

    </div>
  </div>

</body>

</html>