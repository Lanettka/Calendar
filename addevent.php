<html>
<head>
    <title>Registration</title>
<meta http-equiv="Content-Type"content="text/html; charset=windows-1251">
</head>
<body>
<?
$file_name="events.dat";
if(file_exists($file_name)){
$f=fopen($file_name,'a');
}
else {
$f=fopen($file_name,'w');
}
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$fulltext=$_POST['fulltext'];

if (($day==") || ($month==") || ($year==")){
echo"ERROR<br>";
echo"<a href='addevent.html'>Try again...</a>";
exit;
} 
if($fulltext=="){
echo"<a href='addevent.php'>Error...</a>";
exit;
								 }
$date=mktime(23,59,59,$month,$day,$year);
fputs($f,$date."\n\r");
fputs($f,$fulltext."\n\r");
echo'Event added secsesfuly';
fclose($f);
?>
</body>
<html>