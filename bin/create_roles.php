<?php
require_once __DIR__ . "/../bootstrap.php";
use OrmExample\Role;

$roles = ["admin", "editor", "author", "reader"];
foreach ($roles as $role) {
    $newRole = new Role($role);
    echo "Creating role: " . $newRole->getName() . PHP_EOL;
    try {
        $entityManager->persist($newRole);
        $entityManager->flush();
        echo "Role created: " . $newRole->getName()  . " with ID " . $newRole->getId() . PHP_EOL;
    } catch (\Doctrine\ORM\Exception\ORMException $e) {
        echo $e->getMessage();
    }
}