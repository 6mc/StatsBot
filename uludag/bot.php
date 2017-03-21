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

		$site=curl("http://www.uludagsozluk.com/");
//$title[1]="ramazan";
//$number[1]="ramazan";
		$title	=	explode('<small>',$site);
		$titleson	=	explode('</small>',$title[1]);

$number =	explode('dst="content"',$title[0]);
$fertilizer =	explode(')" >',$number[1]);
$gringo =	explode('</a>',$fertilizer[1]);




$links= explode('data-ii="0"><a href="',$number[0]);

$link =explode('/&w=gd"',$links[1]);

echo $titleson[0];
echo "<br>";
echo $gringo[0];

echo $link[1];


$realmente="http://www.uludagsozluk.com/".$link[1];


$dosya = fopen("data.txt","a");
$add =$gringo[0]. ',' .$titleson[0].','.$realmente;
fwrite($dosya,  $add);
fwrite($dosya,"\n");

fclose($dosya);

echo "<br>"."DONE";
?>
