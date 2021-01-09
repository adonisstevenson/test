<?php

//$int = 1; //zmienna
//$int2 =3;
//$s = "test";
//$tab = [1, 2, 3, 4, 5, 6]; //tablica

$first = "jebac";
$second = "disa";


//print($int);
//print($s); //wyswietla dane
//print_r($tab); //wyswietla tablice

//echo $first." ".$second;


$tab = [6, 5, 4, 3, 2, 1, 0];

//echo '<br>';

for($i = 0; $i<=count($tab)-1; $i++){
	//echo $tab[$i];
}

//echo '<b>'.'$first.'

$capital = 67;

print("Zmienne capital ma wartość $capital");
print("<h1>$capital</h1>");

$first =1.1;
$second = 2;
$third = "napis";
$fifth = $first + $second;


echo $first.'<br>';
echo gettype($first).'<br>'.'<br>';

echo $second.'<br>';
echo gettype($second).'<br>'.'<br>';

echo $third.'<br>';
echo gettype($third).'<br>'.'<br>';

echo $fifth.'<br>';
echo gettype($fifth).'<br>'.'<br>';

echo print_r($tab).'<br>';
echo gettype($tab).'<br>'.'<br>';



?>



 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

for($i = 0; $i<=count($tab)-1; $i++){

	echo '<h1 class ="kolorek">'.$tab[$i].'</h1>';
}
?>

<style type="text/css">
	.kolorek{
		color: blue;
		font-style: italic;
		font-family: Arial;
	}
</style>




</body>
</html>

