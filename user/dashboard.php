<?php 
if (session_status() === PHP_SESSION_NONE) session_start();

// Protection: si pas connecté -> login
if (!isset($_SESSION["user"])) {
  header("Location: ../auth/login.php");
  exit;
}

require "../includes/header.php";

$user = $_SESSION["user"];
?>

<h2>Dashboard</h2>

<div class="card">
  <h3>👋 Bonjour <?php echo htmlspecialchars($user["prenom"]); ?> !</h3>
  <p style="color:#9aa6c4;margin-top:8px;">
    Login : <b><?php echo htmlspecialchars($user["login"]); ?></b><br>
    Nom : <b><?php echo htmlspecialchars($user["nom"]); ?></b><br>
    Prénom : <b><?php echo htmlspecialchars($user["prenom"]); ?></b><br>
    Email : <b><?php echo htmlspecialchars($user["mail"]); ?></b>
</p>
  <hr style="border:0;border-top:1px solid rgba(255,255,255,0.12);margin:14px 0;">

  <h4>🎯 Actions rapides</h4>
  <ul style="margin-left:18px;color:#9aa6c4;margin-top:8px;">
    <li><a href="../recettes.php" style="color:#4da3ff;">Voir les recettes</a></li>
    <li><a href="../auth/logout.php" style="color:#ff7b7b;">Se déconnecter</a></li>
  </ul>
</div>

<?php require "../includes/footer.php"; ?>
