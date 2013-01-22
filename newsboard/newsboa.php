<?php
session_start();
include('connections.php');
$id=$_POST['id'];

$i=0;
mysql_selectdb("profiles");
if($_POST['id']==0)
{
$ord="select * from newsboard where newstype='students' order by date1 desc limit 1";
$ord1="select * from newsboard where newstype='faculty' order by date1 desc limit 1";
$ord2="select * from newsboard where newstype='alumni' order by date1 desc limit 1";
$ord3="select * from newsboard where newstype='newsreleases' order by date1 desc limit 1";
$ord4="select * from newsboard where newstype='iits' order by date1 desc limit 1";

$res=mysql_query($ord);
$res1=mysql_query($ord1);
$res2=mysql_query($ord2);
$res3=mysql_query($ord3);
$res4=mysql_query($ord4);

$returnv="";
$a="";
$story="";
$row=mysql_fetch_array($res);
$a="<div class=\"cont\" id=\"" .$row['id']. "\"" ."onclick=\"afterclick(".  $row['id'] . ");\">" . $row['heading']. "</div>";

$a1="<div id=\"image\"><img src=\"".$row['imagepath']. "\"></div>";
echo $a1. $a;
$row=mysql_fetch_array($res1);
$a="<div class=\"cont\" id=\"" .$row['id']. "\"" ."onclick=\"afterclick(".  $row['id'] . ");\">" . $row['heading']. "</div>";
echo($a);
$row=mysql_fetch_array($res2);
$a="<div class=\"cont\" id=\"" .$row['id']. "\"" ."onclick=\"afterclick(".  $row['id'] . ");\">" . $row['heading']. "</div>";
echo($a);
$row=mysql_fetch_array($res3);
$a="<div class=\"cont\" id=\"" .$row['id']. "\"" ."onclick=\"afterclick(".  $row['id'] . ");\">" . $row['heading']. "</div>";
echo($a);
$row=mysql_fetch_array($res4);
$a="<div class=\"cont\" id=\"" .$row['id']. "\"" ."onclick=\"afterclick(".  $row['id'] . ");\">" . $row['heading']. "</div>";
echo($a);

}

else
{
$ord="select imagepath from newsboard where id=$id";
$res=mysql_query($ord);

$row=mysql_fetch_array($res);
echo "<img src=\"".$row['imagepath']. "\">";


}

?>