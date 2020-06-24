<?php
if (isset($_GET["here"])) {
$info = $_GET["info"];
$tur = $_GET["tur"];
$bilgi = file_get_contents(''.base64_decode('aHR0cHM6Ly9ndGFraXAubmV0L2FwaS9pbmZvLw==').''.$info.'.json');
if ($tur == 'json') {
var_dump($bilgi);
}
if ($tur == 'bilgi') {
$json = json_decode($bilgi,true);
echo 'Kayit Tarihi :'.$json[0]["time"].'<br>
Miktar:'.$json[0]["miktar"].'<br>İlk Miktar:'.$json[1]["ilkmiktar"].'<br>Bilgi';
}
} else {
	echo '<form action="" method="GET">
<select name="tur"><option>json</option><option>bilgi</option></select>		<input type="text" name="info" required>
		<button type="submit" name="here">Sorgula</button>
</form>';
}

?>

