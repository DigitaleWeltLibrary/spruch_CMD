<?php
require './php/edit.php';
require './php/img.php';
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projekt Settings - <?= htmlspecialchars($pagetitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
  <link rel="stylesheet" href="style/main.css">
  <link rel="icon" href="assets/layout_img/<?= htmlspecialchars($tapicon) ?>">
</head>

<body>

  <main class="settings">
    <h1>Projekt Settings</h1>
    <form method="post">
      <label for="titel">
        Titel
        <input type="text" name="titel" id="titel" value="<?= htmlspecialchars($pagetitle) ?>" placeholder="Titel, der Seite" required>
      </label>
      <label for="description">
        Beschreibung
        <input type="text" name="description" id="description" value="<?= htmlspecialchars($description) ?>" placeholder="Beschreibung für SEO" required>
      </label>

      <label for="keywords">
        Keywords
        <input type="text" name="keywords" id="keywords" value="<?= htmlspecialchars($keywords) ?>" placeholder="Keywords für SEO" required>
      </label>



      <input type="submit" value="Einstellungen speichern" class="senden">
    </form>
  </main>





</body>

</html>