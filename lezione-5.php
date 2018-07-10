<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lezione 5 - Difference between New self() e New static()</title>
</head>
<body>
<h1>What is the difference between new self and new static?</h1>

<p><b>self</b> refers to the same class in which the new keyword is actually written.
<p><b>static</b>, in PHP 5.3's late static bindings, refers to whatever class in the hierarchy you called the method on 
(si riferisce a qualsiasi classe nella gerarchia in cui hai chiamato il metodo).</b>

<h2><b>Reference</b></h2>
<h3>new self e new static()</h3>
<p><a href="https://stackoverflow.com/questions/5197300/new-self-vs-new-static" target="_blank">https://stackoverflow.com/questions/5197300/new-self-vs-new-static</a></p>
<p>In the following example, B inherits both methods from A. 
The self invocation is bound (limitata) to A because it's defined in A's implementation of the first method, 
whereas (mentre) static is bound to the called class (also see get_called_class()).</p>
<h3>get_class()</h3>
<p><a href="http://php.net/manual/en/function.get-called-class.php" target="_blank">http://php.net/manual/en/function.get-called-class.php</a></p>

<?php
$nl = "<br />";

$codice = <<< 'CODICE'
class A {
    public static function get_self() {
        return new self();
    }

    public static function get_static() {
        return new static();
    }
}

class B extends A {}

echo get_class(B::get_self());  // A
echo get_class(B::get_static()); // B
echo get_class(A::get_self()); // A
echo get_class(A::get_static()); // A
CODICE;

// htmlspecialchars()
echo "<h2>Codice</h2><pre>$codice</pre>";

class A {
    public static function get_self() {
        return new self();
    }

    public static function get_static() {
        return new static();
    }
}

class B extends A {}

echo get_class(B::get_self()).$nl;  // A
echo get_class(B::get_static()).$nl; // B
echo get_class(A::get_self()).$nl; // A
echo get_class(A::get_static()).$nl; // A
?>
</body>
</html>