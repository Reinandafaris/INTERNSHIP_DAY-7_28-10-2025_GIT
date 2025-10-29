<?php
// 1. Include file logic
include 'logic/array_logic.php';

// 2. Tentukan halaman ini sebagai halaman aktif
$current_page = 'array.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Array PHP</title>
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
      <h1>Berlatih Array PHP</h1>

      <div class="soal-container">
        <h3> Soal 1 & 2 </h3>
        <p>Cast Stranger Things:</p>

        <b>Total Kids: <?= $total_kids ?></b>
        <ol>
          <?php
          // Loop untuk menampilkan data kids
          foreach ($kids as $kid) {
            echo "<li> $kid </li>";
          }
          ?>
        </ol>

        <b>Total Adults: <?= $total_adults ?></b>
        <ol>
          <?php
          // Loop untuk menampilkan data adults
          foreach ($adults as $adult) {
            echo "<li> $adult </li>";
          }
          ?>
        </ol>
      </div>

      <div class="soal-container">
        <h3> Soal 3 </h3>
        <p>Data Characters (Array Asosiatif Multidimensi):</p>
        <pre>
<?php
// Tampilkan array dengan rapi menggunakan print_r
print_r($characters);
?>
                </pre>
      </div>
    </div>
  </div>

</body>

</html>