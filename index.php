PHP
<?php
$host = 'db-server'; // Quel est le nom d'hôte ? (Indice : ce n'est pas un localhost)
$db = 'test_docker';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Succès : connexion ) Docker MySQL réussie!";
} catch (\PDOException $e) {
    echo "Erreur : " .$e->getMessage();
}