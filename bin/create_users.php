<?php
require __DIR__ .  '/../vendor/autoload.php'; // Assurez-vous que le chemin est correct
require_once __DIR__ . "/../bootstrap.php";
use Faker\Factory;
use OrmExample\User;
use OrmExample\Role;

$faker = Factory::create("fr_FR");

$roles = ["admin", "editor", "author", "reader"];
$probabilities = [5, 20, 30, 60];
$pick_ensemble = array();
foreach ($probabilities as $key => $item) {
    $pick_ensemble = array_merge($pick_ensemble, array_fill(0, $item, $key));
}

for ($i = 0; $i < 100; $i++) {
    try {
        $rand_idx = $pick_ensemble[random_int(0, count($pick_ensemble)-1)] + 1;
        $role = $entityManager->find(Role::class, $rand_idx);
        echo "Rand Idx: " . $rand_idx . PHP_EOL;
        echo "Creating user with role: " . $role->getName() . PHP_EOL;
    } catch (\Doctrine\ORM\OptimisticLockException $e) {
        echo $e->getMessage();
    } catch (\Doctrine\ORM\Exception\ORMException $e) {
        echo $e->getMessage();
    }

    $name = $faker->name;
    $email = $faker->email;

    $user = new User($name, $email, $role);

    try {
        $entityManager->persist($user);
        $entityManager->flush();
        echo "User created: " . $user->getName() . " with ID " . $user->getId() . PHP_EOL;
    } catch (\Doctrine\ORM\Exception\ORMException $e) {
        echo $e->getMessage();
    }
}
