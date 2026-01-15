<?php require "includes/header.php"; ?>

<h2>🍽️ Nos recettes</h2>
<p style="color:#9aa6c4;margin-top:8px;">
  6 recettes simples avec ingrédients. 
</p>

<?php
$recettes = [
  [
    "titre" => "Tajine Poulet Citron",
    "temps" => "60 min",
    "niveau" => "Facile",
    "img" => "assets/img/tajine.jpg",
    "ingredients" => ["Poulet", "Citron confit", "Olives", "Oignon", "Épices"]
  ],
  [
    "titre" => "Couscous Marocain",
    "temps" => "90 min",
    "niveau" => "Moyen",
    "img" => "assets/img/couscous.jpg",
    "ingredients" => ["Semoule", "Poulet", "Carottes", "Courgette", "Pois chiches"]
  ],
  [
    "titre" => "Pasta Alfredo",
    "temps" => "25 min",
    "niveau" => "Facile",
    "img" => "assets/img/alfredo.jpg",
    "ingredients" => ["Pâtes", "Crème", "Parmesan", "Ail", "Poulet"]
  ],
  [
    "titre" => "Salade César",
    "temps" => "15 min",
    "niveau" => "Facile",
    "img" => "assets/img/cesar.jpg",
    "ingredients" => ["Salade", "Poulet", "Croutons", "Parmesan", "Sauce César"]
  ],
  [
    "titre" => "Crêpes Sucrées",
    "temps" => "20 min",
    "niveau" => "Facile",
    "img" => "assets/img/crepes.jpg",
    "ingredients" => ["Farine", "Lait", "Œufs", "Sucre", "Beurre"]
  ],
  [
    "titre" => "Omelette Fromage",
    "temps" => "10 min",
    "niveau" => "Très facile",
    "img" => "assets/img/omelette.jpg",
    "ingredients" => ["Œufs", "Fromage", "Sel", "Poivre", "Beurre"]
  ],
];
?>

<div class="grid" style="margin-top:18px;">
  <?php foreach($recettes as $r): ?>
    <div class="card recipe">
      <img src="<?php echo $r["img"]; ?>" alt="<?php echo $r["titre"]; ?>"
           style="width:100%; height:180px; object-fit:cover; border-radius:12px;">
      <h3 style="margin-top:12px;"><?php echo $r["titre"]; ?></h3>

      <p style="color:#9aa6c4;margin-top:6px;">
        ⏱️ <?php echo $r["temps"]; ?> • ⭐ <?php echo $r["niveau"]; ?>
      </p>

      <p style="margin-top:10px;font-weight:bold;">Ingrédients :</p>
      <ul style="margin-left:18px;color:#9aa6c4;margin-top:6px;">
        <?php foreach($r["ingredients"] as $ing): ?>
          <li><?php echo $ing; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
</div>

<?php require "includes/footer.php"; ?>
