<?php
echo date('H-i');
echo "<br>";
if (date('H') < 19 && date('H') < 23)
{
echo "string";


}
function curl($url){
		$curl=curl_init();
		curl_setopt($curl,CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		$cikti= curl_exec($curl);
		curl_close($curl);
		return str_replace(array("","",""), null, $cikti);
	}

		$site=curl("https://eksisozluk.com/");
//$title[1]="ramazan";
//$number[1]="ramazan";
		$title	=	explode('<small>',$site);
		$titleson	=	explode('</small>',$title[1]);

$number =	explode('?a=popular">',$title[0]);

$links= explode('topic-list partial',$number[0]);

$link =explode('href="',$links[1]);

echo $titleson[0];
echo "<br>";
echo $number[1];

echo $link[1];


$realmente="https://www.eksisozluk.com".$link[1];


$dosya = fopen("data.txt","a");
$add =$number[1]. ',' .$titleson[0].','.$realmente;
fwrite($dosya,  $add);
fwrite($dosya,"\n");

fclose($dosya);

echo "<br>"."DONE";
?>
