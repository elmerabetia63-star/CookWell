<?php
if (session_status() === PHP_SESSION_NONE) session_start();
require "../config/db.php";

$error = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

  $login = trim($_POST["login"] ?? "");
  $password = $_POST["password"] ?? "";

  $stmt = $pdo->prepare("SELECT * FROM utilisateurs_site_TP WHERE login = ?");
  $stmt->execute([$login]);
  $user = $stmt->fetch();

  // ✅ TP prof : password en clair
  if($user && $password == $user["password"]){

    $_SESSION["user"] = [
      "login" => $user["login"],
      "nom" => $user["nom"],
      "prenom" => $user["prenom"],
      "mail" => $user["mail"]
    ];

    header("Location: ../index.php");
    exit;    

  } else {
    $error = "Login ou mot de passe incorrect.";
  }
}

require "../includes/header.php";
?>

<h2>Connexion</h2>

<form method="post" class="card" style="max-width:450px;margin:18px auto;">
  <label>Login</label>
  <input type="text" name="login" required>

  <label>Mot de passe</label>
  <input type="password" name="password" required>

  <button class="btn" style="margin-top:14px;border:0;cursor:pointer;">Connexion</button>

  <?php if($error): ?>
    <div class="error" style="margin-top:12px;"><?php echo $error; ?></div>
  <?php endif; ?>
</form>

<?php require "../includes/footer.php"; ?>
