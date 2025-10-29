<?php
// 1. Include file logic
include 'logic/string_logic.php';

// 2. Tentukan halaman ini sebagai halaman aktif
$current_page = 'string.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>String PHP</title>
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
      <h1>Berlatih String PHP</h1>

      <div class="soal-container">
        <h3> Soal No 1</h3>
        <p>
          Kalimat pertama: "<?= $first_sentence ?>" <br>
          Panjang string: <?= $first_len ?>,
          Jumlah kata: <?= $first_words ?>
        </p>
        <p>
          Kalimat kedua: "<?= $second_sentence ?>" <br>
          Panjang string: <?= $second_len ?>,
          Jumlah kata: <?= $second_words ?>
        </p>
      </div>

      <div class="soal-container">
        <h3> Soal No 2</h3>
        <label>String: </label> "<?= $string2 ?>" <br>
        Kata pertama: <?= $kata_pertama_2 ?> <br>
        Kata kedua: <?= $kata_kedua_2 ?> <br>
        Kata Ketiga: <?= $kata_ketiga_2 ?>
      </div>

      <div class="soal-container">
        <h3> Soal No 3 </h3>
        String: "<?= $string3 ?>" <br>
        Output: "<?= $string3_output ?>"
      </div>
    </div>
  </div>

</body>

</html>