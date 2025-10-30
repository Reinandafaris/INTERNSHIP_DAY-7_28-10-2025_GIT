<?php
$data = require 'logic/get_animals.php';

$sheep = $data['sheep'];
$kodok = $data['frog']['data'];
$kodok_action = $data['frog']['action'];
$sungokong = $data['ape']['data'];
$sungokong_action = $data['ape']['action'];
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas OOP PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <header>
      <h1>output akhir</h1>
    </header>

    <main>
      <div class="animal-card">
        <p>Name : <?php echo $sheep->name; ?></p>
        <p>legs : <?php echo $sheep->legs; ?></p>
        <p>cold blooded : <?php echo $sheep->cold_blooded; ?></p>
      </div>

      <div class="animal-card">
        <p>Name : <?php echo $kodok->name; ?></p>
        <p>legs : <?php echo $kodok->legs; ?></p>
        <p>cold blooded : <?php echo $kodok->cold_blooded; ?></p>
        <p>Jump : <?php echo $kodok_action; ?></p>
      </div>

      <div class="animal-card">
        <p>Name : <?php echo $sungokong->name; ?></p>
        <p>legs : <?php echo $sungokong->legs; ?></p>
        <p>cold blooded : <?php echo $sungokong->cold_blooded; ?></p>
        <p>Yell : <?php echo $sungokong_action; ?></p>
      </div>
    </main>
  </div>

  <script src="script.js"></script>
</body>

</html>