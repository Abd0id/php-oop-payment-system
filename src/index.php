<?php
require_once 'Database/DatabaseConnection.php';
require_once 'Repository/ClientRepository.php';
require_once 'Entity/Client.php';
$connect = new DatabaseConnection();
$pdo = $connect->getConnection();
startApp($pdo);

function startApp($pdo)
{

    if ($pdo) {
        echo "==============================
 SYSTEME DE PAIEMENT - MENU
==============================
1. Créer un client
2. Créer une commande
3. Payer une commande
4. Afficher les commandes
0. Quitter
------------------------------\n";

        $input = readline("Votre choix :");
        $input = trim($input);


        if (empty($input) && $input != 0) {
            echo "invalid choie";
        }

        switch ($input) {
            case '0':
                echo "\n exiting app ..... \n";
                exit(0);

            case '1':
                echo "Enter name:";
                $name = readline();
                echo "\nEnter email:";
                $email = readline();
                $myClient = new Client($name,$email);
                $clientRepo = new ClientRepository()->create($myClient);
                break;

            default:
                # code...
                break;
        }

    }
}
?>