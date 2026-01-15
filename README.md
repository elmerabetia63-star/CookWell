# CookWell 🍽️

**CookWell** est un mini-site web de recettes réalisé dans le cadre du module **Technologie de l’Internet** (ENSIM – 3ème année).  
Le site propose une interface moderne et responsive, ainsi qu’un système d’authentification relié à une base de données MySQL.

---

## ✅ Fonctionnalités principales

- Navigation multi-pages : Accueil / Recettes / Contact
- Affichage des recettes sous forme de **cartes**
- Mode **Dark / Light**
- Authentification utilisateur :
  - Inscription
  - Connexion
  - Déconnexion
- Dashboard accessible après connexion
- Utilisation des **sessions** et **cookies**
- Projet responsive (adapté ordinateur)

---

## 🛠️ Technologies utilisées

- **HTML5 / CSS3**
- **JavaScript**
- **PHP**
- **MySQL** (phpMyAdmin)

---

## 📁 Structure du projet

Le projet est organisé sous forme de dossiers afin de séparer :
- les pages du site,
- les fichiers partagés (header/footer, connexion BDD),
- l’authentification,
- l’espace utilisateur,
- et les ressources (images, audio).


### 📌 Explication rapide

- `index.php` : page principale du site (présentation + contenu multimédia)
- `recettes.php` : page listant les recettes avec images + infos
- `contact.php` : informations sur le projet et comment contacter le développeur
- `theme.php` : applique le thème light/dark via cookie + redirection

- `assets/` : stocke tous les fichiers media (images, audio…)
- `includes/` : contient les éléments communs à toutes les pages :
  - `header.php` = menu + style général
  - `footer.php` = footer
  - `db.php` = connexion MySQL

- `auth/` : pages login / register / logout
- `user/` : pages accessibles uniquement une fois connecté

---

## 🗄️ Base de données

Le site utilise une base de données MySQL accessible via phpMyAdmin.  
Table utilisée : `utilisateurs_site_TP`

Champs principaux :
- `login`
- `password`
- `nom`
- `prenom`
- `mail`

---

## ⚙️ Installation / Exécution

1. Placer le dossier `cookwell/` sur le serveur web (Apache ENSIM).
2. Configurer l’accès à MySQL dans `includes/db.php`.
3. Ouvrir le lien du site depuis un navigateur.
4. Tester :
   - inscription / connexion
   - dashboard
   - mode Dark/Light

---

## 👤 Auteur

- **Aymane El Merabeti**
- ENSIM – 3ème année
- Projet : Technologie de l’Internet


