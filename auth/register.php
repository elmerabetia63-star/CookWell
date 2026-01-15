$stmt = $pdo->prepare("INSERT INTO utilisateurs_site_TP (login, password, nom, prenom, mail)
                       VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$login, $password, $nom, $prenom, $mail]);
