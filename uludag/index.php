<html>
<link href="normalize.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<head>
<title>EkşiBot</title>
</head>
<body>

<img src="logo.png" alt="Eksi-stats">

  <div id="general">



<?php


$eray[0]="nane";

$file = fopen("data.txt",'r');
$fil=("data.txt");

$lines = file($fil, FILE_IGNORE_NEW_LINES);

fclose($file);

//echo $lines[2];
  $nuevo="";
$r=Count($lines);
for ($i=0; $i <$r; $i++) {
  # code...

$nuevo= $nuevo.$lines[$i].",";
}
echo "<br>";
//echo $nuevo;

$elma = explode(",", $nuevo);

//echo $elma[4];
$reve[0]="";
$t=0;
for ($i=0; $i <Count($elma)-1 ; $i++) {
  # code...
  $reve[$elma[$i+1]]=$elma[$i];
  $royal[$elma[$i+1]]= $elma[$i+2];
  $i++;
    $i++;
}

//echo $reve[25];

for ($i=1500; $i >0 ; $i--) {
  # code...
if (isset($reve[$i])==1) {

 echo "<a href='".$royal[$i]."'>"."<div id='gen'>".$reve[$i]."</div>"."'</a>"." "."<div id='say'>".$i."</div>";echo "<br>";
}
}

?>
  </div>
</body>
</html>
