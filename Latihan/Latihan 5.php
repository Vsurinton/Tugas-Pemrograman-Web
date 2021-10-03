<html>
<head>
<title> Contoh Skrip PHP </title>
<body>

Tanggal Lahir :
<select name = tanggal>
	<option value = 0 selected>tanggal
<?
	for($i = 1; $i < 32; $i++)
		echo <option value = $i>$i;
?>
</option></select>
</body>
</html>