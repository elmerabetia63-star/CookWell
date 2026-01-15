<?php require "includes/header.php"; ?>

<section class="hero">
  <h1>Bienvenue sur CookWell 🍳</h1>
  <p style="color:#9aa6c4;margin-top:8px;">
    CookWell vous propose une sélection de recettes, avec ingrédients et temps de preparation, dans une interface clair et moderne.
  </p>
</section>

<div class="card">
  <h3>🎬 Vidéo</h3>
  <div style="position:relative;padding-top:56.25%;margin-top:12px;">
    <iframe
      src="https://youtube.com/embed/8Qhs9H6YFoY"
      style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;border-radius:14px;"
      allowfullscreen>
    </iframe>
  </div>
</div>

<div class="card">
  <h3>🎵 Audio</h3>
  <audio controls style="width:100%;margin-top:10px;">
    <source src="assets/audio/sound.mp3" type="audio/mpeg">
  </audio>
  <p style="color:#9aa6c4;margin-top:8px;">
    une music êndant que vous cuisinez !
  </p>
</div>

<?php require "includes/footer.php"; ?>
