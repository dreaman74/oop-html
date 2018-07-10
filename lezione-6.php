<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indicatori di Visibilità: public, protected e private</title>
</head>
<body>
<h1>Modificatori di Accesso / Indicatori di Visibilità</h1>

<h2>public</h2>
<p>I membri (proprietà e metodi) di una classe dichiarati con l'indicatore di visibilità public, 
sono accessibili sia dall'esterno della classe sia dalle classi derivate da essa.</p>
<p>Nel caso in cui non si specifichi la visibilità associata ad un membro, il <b>livello di visibilità di DEFAULT è public</b>.</p>
<?php
$nl = "<br />";

class Person {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function recuperaNome(){
        return $this->getName();
    }
}

$customer1 = new Person("Francesco Tomei");
echo "(Accede al Metodo) \$customer1=\$customer1->getName() : ".$customer1->getName().str_repeat($nl, 2);

$customer2 = new Person("Francesca Pascali");
echo "(Accede alla Proprietà) \$customer2=\$customer2->name : ".$customer2->name.str_repeat($nl, 2);
echo "(Accede al Metodo) \$customer2=\$customer2->recuperaNome() : ".$customer2->recuperaNome().str_repeat($nl, 0); // La funzione str_repeat() restituisce una Stringa Vuota
?>

<h2>Reference</h2>
<h3><a href="http://php.net/manual/en/function.str-repeat.php" target="_blank">str_repeat()</a></h3>
<p>Repeat a string</p>
<p>string str_repeat ( string $input , int $multiplier )</p>
</body>
</html>