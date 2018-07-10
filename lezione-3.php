<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Basi della OOP in PHP</title>
</head>
<body>
<?php
    // Classe create in fase di Compilazione
    class Person{
        // Stato Interno - Proprietà / Attributo
        public $name;

        // costruttore
        public function __construct($name){
            // Inizializzazione della variabile $name
            $this->name = $name;
        }

        // Metodi
        public function getName(){
            // $this rappresenta l'oggetto che viene costruito a runtime (riferimento all'istanza di una classe)
            return $this->name;
        }

        // Indicatore di Visibilità (anche chiamato, Specificatori di Accesso)
        // public (DEFAULT)
    }


    // Istanzia un nuovo oggetto della classe Person (a Runtime)
    $customer1=new Person("Giuseppe Rossi");
    // Istanzia un nuovo oggetto della classe Person (a Runtime)
    // Istanza diversa dalla precedente di $customer1
    $customer2=new Person("Giuglielmo Cancelli");

    echo "<p>\$customer1: <strong>{$customer1->getName()}</strong>";
    echo "<p>\$customer2: <strong>{$customer2->getName()}</strong>";
?>
</body>
</html>