<?php
require_once "bootstrap.php";

$userRepository = $entityManager->getRepository('OrmExample\User');
$users = $userRepository->findAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
</head>
<body>
<h1>Liste des utilisateurs</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo htmlspecialchars($user->getName(), ENT_QUOTES, 'UTF-8') . ' (' . htmlspecialchars($user->getEmail(), ENT_QUOTES, 'UTF-8') . ')'; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
