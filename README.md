# CookWell 🍽️

CookWell est un mini-site web de recettes réalisé dans le cadre du module **Technologie de l’Internet** (3ème année ENSIM).  
Le site propose une interface moderne et responsive, avec un système d’authentification et une base de données.

---

## ✅ Fonctionnalités principales

- Page d’accueil avec présentation du site
- Page recettes (cartes + images + infos)
- Page contact / à propos
- Mode **Dark / Light**
- Authentification utilisateur :
  - Inscription
  - Connexion
  - Déconnexion
- Accès à un **dashboard utilisateur** après connexion
- Utilisation de **sessions** et **cookies**

---

## 🛠️ Technologies utilisées

- **HTML / CSS**
- **JavaScript**
- **PHP**
- **MySQL** (phpMyAdmin)

---

## 📁 Structure du projet
cookwell/
│── index.php
│── recettes.php
│── contact.php
│── theme.php
│
├── assets/
│ ├── images/
│ └── audio/
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ └── db.php
│
├── auth/
│ ├── login.php
│ ├── register.php
│ └── logout.php
│
└── user/
└── dashboard.php
