<html>
<head>
    <title>Portal:calendar</title>
<meta http-equiv="Content-Type"content="text/html; charset=windows-1251">
</head>
<body>
<?
$file_name="events.dat";
if(!file_exists($file_name)){
echo"Error";
exit;
}
$f=fopen($file_name,'r');
$i=0;
while(!feof($f){
$buf=fgets($f,1000000);
	if(trim($buf)!=")
	{
	$date[$i]=$buf;
	}
	$text[$i]=fgets($f,1000000);
	$i=$i+1;
}
fclose($f);
$my_date=time();
$near=array();
for($k=0;$k<5;$k++)
{
$min=1111111111111111111111111;
echo $min;
for ($i=0;($i<count($date));$i++)
{
if(($date[$i]>=$my_date) and (abs($date[$i]-$my_date<=$min))
{
if(!in_array($i,$near))
}
$min=$date[$i]-$my_date;
$near[$k]=$i;
}

}
}
}
if (count($near)==0) {
echo 'Event after'.date('d-m-Y',time()).'is not';
}
else
{
echo'<b>Will be soon:</b><br>';
}

for($i=0;(($i<5)and(count($near)));$i++)
{
echo date('d-m-Y',$date[$near[$i]]).'-'.$text[$near[$i]].'<br>';
}
?>
</body>
<html>