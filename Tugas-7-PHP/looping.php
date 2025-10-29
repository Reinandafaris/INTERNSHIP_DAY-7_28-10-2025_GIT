<?php
// 1. Include file logic
include 'logic/looping_logic.php';

// 2. Tentukan halaman ini sebagai halaman aktif
$current_page = 'looping.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Looping PHP</title>
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
      <h1>Berlatih Looping PHP</h1>

      <div class="soal-container">
        <h3>Soal No 1 Looping I Love PHP</h3>
        <?php
        // Panggil fungsi dari file logic
        echo getLoopingPertama();
        echo "<br>"; // Beri spasi
        echo getLoopingKedua();
        ?>
      </div>

      <div class="soal-container">
        <h3>Soal No 2 Looping Array Modulo</h3>
        Array numbers:
        <pre><?php print_r($numbers); ?></pre>
        <br>
        Array sisa baginya adalah:
        <pre><?php print_r($rest); ?></pre>
      </div>

      <div class="soal-container">
        <h3>Soal No 3 Looping Associative Array</h3>
        <?php
        // Loop untuk menampilkan hasil
        foreach ($assoc_items as $item) {
          echo "<pre>";
          print_r($item);
          echo "</pre>";
        }
        ?>
      </div>

      <div class="soal-container">
        <h3>Soal No 4 Asterix</h3>
        <?php
        // Panggil fungsi dari file logic
        echo getAsterixPola();
        ?>
      </div>

    </div>
  </div>

</body>

</html>