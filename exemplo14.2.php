<html>
<head>
<title></title>
</head>
<body>
<h1>Exemplo 14.2</h1>
<?php
function testeGlobal(){
global $a;
$a=25;
}
echo"<h1>vari�vel Global</h1>";
$a=0;
testeGlobal();
echo"Valor d� Vari�vel a = $a";
?>

</body>
</html>