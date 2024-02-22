<?php

session_start();
//var_dump($_SESSION); exit;

$user['role'] = $_SESSION['role'];

// Connexion à la base de données
$host = "127.0.0.1";
$dbname = "db_garage";
$username = "root";
$password = "root";
$port = "3306";
global $pdo; 

$pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Requête pour récupérer tous les utilisateurs
$sql = "SELECT * FROM utilisateurs";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

// Requête pour vérifier si le rôle a déjà été modifié
$sql = "SELECT role FROM utilisateurs WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$currentRole = $stmt->fetchColumn();

// Si le rôle sélectionné est différent du rôle actuel, procédez à la modification
if ($newRole != $currentRole) {
    $sql = "UPDATE utilisateurs SET role = :newRole WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':newRole' => $newRole, ':id' => $id]);

    // En cas de succès, préparez un message de confirmation
    $_SESSION['message'] = "Le rôle a été modifié avec succès.";
    header('Location: gestion_utilisateurs.php'); // Redirection vers la page de gestion des rôles
    die();
} else {
    // Si le rôle n'a pas été modifié, préparez un message d'information
    $_SESSION['message'] = "Le rôle n'a pas été modifié car il est déjà le même.";
    header('Location: gestion_utilisateurs.php'); // Redirection vers la page de gestion des rôles
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des rôles</title>
</head>
<body>
    <h1>Gestion des rôles</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['nom']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <form action="modifier_role.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <select name="role">
                                <option value="utilisateur">Utilisateur</option>
                                <option value="employe">Employé</option>
                                <option value="admin">Admin</option>
                            </select>
                            <input type="submit" value="Modifier">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
