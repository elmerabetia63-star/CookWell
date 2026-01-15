document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registerForm");
  if(!form) return;

  form.addEventListener("submit", (e) => {
    let nom = document.getElementById("nom").value.trim();
    let prenom = document.getElementById("prenom").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;

    let errorBox = document.getElementById("errorBox");
    errorBox.textContent = "";

    // Regex simple
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(nom.length < 2){
      e.preventDefault();
      errorBox.textContent = "Nom trop court.";
      return;
    }
    if(prenom.length < 2){
      e.preventDefault();
      errorBox.textContent = "Prénom trop court.";
      return;
    }
    if(!emailRegex.test(email)){
      e.preventDefault();
      errorBox.textContent = "Email invalide.";
      return;
    }
    if(password.length < 6){
      e.preventDefault();
      errorBox.textContent = "Mot de passe : minimum 6 caractères.";
      return;
    }
  });
});
