<html>
<head>
<title></title>
</head>
<body>
<h1>Exemplo 14.3</h1>
<?PHP
function testeStatic(){
static $a=0;
$a += 25;
echo "Valor d� Vari�vel a = $a <br>";
}
echo"<h1>Vari�vel est�tica</h1>";
testeStatic();
testeStatic();
testeStatic();
?>

</body>
</html>