<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$BASE_URL = "/e2508053/cookwell-20260113T135443Z-1-001/cookwell";
$theme = $_COOKIE["theme"] ?? "dark";
$bodyClass = ($theme === "light") ? "light" : "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CookWell</title>
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/responsive.css">

</head>
<body class="<?php echo $bodyClass; ?>">


<header class="topbar">
  <div class="container">
    <h2>CookWell</h2>
    <nav>
      <a href="<?php echo $BASE_URL; ?>/theme.php?t=dark">Dark</a>
      <a href="<?php echo $BASE_URL; ?>/theme.php?t=light">Light</a>
      <a href="<?php echo $BASE_URL; ?>/index.php">Accueil</a>
      <a href="<?php echo $BASE_URL; ?>/recettes.php">Recettes</a>
      <a href="<?php echo $BASE_URL; ?>/contact.php">Contact</a>


      <?php if(isset($_SESSION["user"])): ?>
        <a href="user/dashboard.php">Dashboard</a>
        <a class="btn" href="<?php echo $BASE_URL; ?>/auth/logout.php">Déconnexion</a>
      <?php else: ?>
        <a class="btn" href="auth/login.php">Connexion</a>
      <?php endif; ?>
    </nav>
  </div>
</header>

<main class="container">
