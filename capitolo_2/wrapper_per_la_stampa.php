<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Un Wrapper per la Stampa - Capitolo 2</title>
</head>

<body>
<h1>Un Wrapper per la stampa</h1>
<p><a href="../index.php" alt="indice degli argomenti">&laquo; Indice</a> | Un Wrapper per la stampa</p>

<div style="width:45%;float:left;">
	<h2>Codice Procedurale:</h2>
	<p style="background-color:#efefef;border:#aaaaaa 2px solid;padding:10px;">
    function ph($txt){<br>
        echo(<?php echo htmlspecialchars('"<p>".$txt."</p>"')?>);<br>
    }<br>
    <br>
     function div($txt){<br>
     	echo(<?php echo htmlspecialchars('"<div>"');?>);<br>
       ph($txt);<br>
        echo(<?php echo htmlspecialchars('"</div>"');?>);<br>
    }<br>
    <br>
    // Stampa il seguente HTML: <?php echo htmlspecialchars('"<p>This is a paraghrap</p>"');?><br>
    // ph("This is a paraghrap");<br>
    <b>div("This is a paraghrap");</b>
    </p>
</div>

<div style="margin-left:10px;width:45%;float:left;">
    <h2>Risultato:</h2>
	<div style="border:#4488dd 2px solid;padding:10px;">
    <?php
        function ph($txt){
            echo("<p>".$txt."</p>");
        }
		
		function div($txt){
			echo"<div>";
			ph($txt);
			echo"</div>";
		}
        
        // Stampa il seguente HTML: "&lt;p&gt;This is a paraghrap&lt;/p&gt;"<br>
        div("This is a paraghrap");
    ?>
    </div>
</div>

<div style="clear:both;"></div>

<div style="width:45%;float:left;">
	<h2>Codice OOP:</h2>
	<p style="background-color:#efefef;border:#aaaaaa 2px solid;padding:10px;">
    class HTML {<br>
    	<br>
        public function ph($txt){<br>
            echo(<?php echo htmlspecialchars('"<p>".$txt."</p>"')?>);<br>
        }<br>
        <br>
        public function div($txt){<br>
            echo(<?php echo htmlspecialchars('"<div>"');?>);<br>
            $this->ph($txt);<br>
        	echo(<?php echo htmlspecialchars('"</div>"');?>);<br>
   		}<br>
	<br>
    }<br>
    <br>
    $html = new HTML();<br>
    <br>
    // Stampa il segnuete HTML: <?php echo htmlspecialchars('"<p>This is a paraghrap</p>"');?><br>
    //$html->ph("This is a paraghrap");<br>
    <b>$html->div("This is a paraghrap");</b>
    </p>
</div>

<div style="margin-left:10px;width:45%;float:left;">
    <h2>Risultato:</h2>
	<div style="border:#4488dd 2px solid;padding:10px;">
    <?php
	class HTML {

        public function ph($txt){
            echo"<p>".$txt."</p>";
        }
		
		public function div($txt){
			echo("<div>");
				$this->ph($txt);
			echo("</div>");
		}

   	}

    $html = new HTML();
    // Stampa il segnuete HTML: "<p>This is a paraghrap<p>"
    $html->ph("This is a Paraghrap");
	$html->div("This is a DIV");
    ?>
    </div>
</div>
<div style="clear:both;"></div>
</body>
</html>