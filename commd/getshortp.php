<?php

include("connect_server.php");

$count = $_GET['count'];

$maxtakeoutrows = 4 ;

$startindex = $count*$maxtakeoutrows ;


$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
$query="SELECT * FROM `announcements` WHERE (`newstype`='S')  order by expiry_date limit $startindex, $maxtakeoutrows";

$result=mysql_query($query);

$my_message="";
//print_r($result);
echo mysql_error();

while ($row = mysql_fetch_array($result)) {

	$topic = $row["topic"];
	$Duration = $row["Duration"];

	if ($Duration == "") $Duration = "Jan 2013";

	$url = rtrim($row["more_info_url"]);

	if ($url != "") {
		$link_tab = "<A HREF=".$url." target='_blank' class=upperscroll><div id='newsrow'>";
	} 

	else {
		$link_tab = "<A HREF=/news/showannouncedescr.php?newsid=".$row["slno"]." target='_blank' class=upperscroll><div id='newsrow'>";
	}
	$my_message = $my_message.$link_tab.$topic."<br/> ".$Duration."</div></a>";
}
	

echo $my_message;
	
?>
