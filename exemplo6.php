<HTML>
<HEAD>
 <TITLE>exemplo6</TITLE>
</HEAD>
<BODY>
<?php
  echo "<h1> ***Operadores booleanos exemplo 6****</h1><br> ";
  $c= FALSE;
  echo "12>=12 and 10>2" ,(12>=12 and 10>2)? " verdadeiro" : "falso";
  echo"<br>";
  echo "12 >= 12 or FALSE ",(12>=12 or $c)? " verdadeiro" : "falso";
  echo"<br>";
  echo "12 >= 12 xor 10>2 ",(12>=12 xor 10 > 2) ? " verdadeiro" : "falso";
  echo"<br>";
  echo "!FALSE ",(!$c) ? " verdadeiro" : "falso";
  echo"<br>";
  echo "10>2 && FALSE ",(10>2 && $c) ? " verdadeiro" : "falso";
  echo"<br>";
  echo "12>=12 || FALSE ",(12>=12 || $c)? "verdadeiro" : " falso";
  
?>
</BODY>
</HTML>
