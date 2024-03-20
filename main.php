<?php
require_once 'Client.php';
require_once 'Admin.php';
$user = new User("Jan", "Kowalski", "jkowalski");
$client = new Client("Anna", "Nowak", "annanowak", "Warszawa", "Mazowieckie", "Polska");
$admin = new Admin("Robert", "Lewandowski", "lewy123");

echo $user->fullName() . " - is admin: " . ($user->isAdmin() ? 'Yes' : 'No') . "\n";
echo $client->fullName() . " - is admin: " . ($client->isAdmin() ? 'Yes' : 'No') . " - Location: " . $client->location() . "\n";
echo $admin->fullName() . " - is admin: " . ($admin->isAdmin() ? 'Yes' : 'No') . "\n";

?>