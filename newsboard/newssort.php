<?php
session_start();
include('connections.php');
$name=$_POST['name'];
$count = $_POST['count'];

/*
switch($name)
{
case 'students':$ord="select * from newsboard where newstype='students' order by date1 desc limit 5";break;
case 'faculty':$ord="select * from newsboard where newstype='faculty' order by date1 desc limit 5";break;
case 'alumni':$ord="select * from newsboard where newstype='alumni' order by date1 desc limit 5";break;
case 'newsreleases':$ord="select * from newsboard where newstype='newsreleases' order by date1 desc limit 5";break;
case 'iits':$ord="select * from newsboard where newstype='iits' order by date1 desc limit 5";break;
}
*/


$maxtakeoutrows = 4 ;

$startindex = $count*$maxtakeoutrows ;


$ord="select * from newsboard where newstype='$name' order by date1 desc limit $startindex, $maxtakeoutrows";

$i=0;
$id=1;
mysql_selectdb("profiles");
$res=mysql_query($ord);

$res=mysql_query($ord,$con);
$returnv="";
$a="";
$story="";
$i=0;
while($row=mysql_fetch_array($res))
{
	$date1=substr($row['date1'],-2);
	$monthNum = substr($row['date1'],5,2);
	$monthName =substr( date("F", mktime(0, 0, 0, $monthNum, 10)),0,3);
	$a="<div onclick=\"toanimate(" .$i. " , this);\" class=\"cont1\"><div id=\"date\">" . $monthName."<br>". $date1 ."</div>" ."<p>".$row['heading']."</p>"."<div id=\"slide\">"."<div id=\"more1\"></div><p>".$row['content'] ."</p></div>"."</div>";
	$returnv=$returnv.$a;
	$i++;
}


echo $returnv;
?>