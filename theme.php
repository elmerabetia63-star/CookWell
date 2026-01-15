<?php
// change theme cookie (dark/light)
$theme = $_GET["t"] ?? "dark";

if ($theme !== "dark" && $theme !== "light") {
  $theme = "dark";
}

// cookie 7 jours
setcookie("theme", $theme, time() + 7*24*60*60, "/");

header("Location: index.php");
exit;
