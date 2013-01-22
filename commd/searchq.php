<?php

include("connect_server.php");


$srch = $_GET['q'];

$output = "";

$part1 = "<a href='";
$part2 = "' target='_blank'><div>";
$part3 = "</div></a>";


$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}

$keywords = explode(" ", $srch);
$q = $keywords[0];

$query="SELECT * FROM `searchdb` WHERE title LIKE '%$q%' ";

for ($i=1; $i<count($keywords); $i++) {
	
	$q =  $keywords[$i];
	//print ",";
	
	$query = $query."AND title LIKE '%$q%'";
	
	//print $query;
	
	//print "<br";
	//$query = $query." AND href LIKE '%$q%'"
		
	
}
	//$query="SELECT * FROM `coursesdb` WHERE title LIKE '%$q%' OR htmlsyll LIKE '%$q%' ";

$query = $query." LIMIT 15";	

$result=mysql_query($query);


while ($row = mysql_fetch_array($result)) {

	//print $row["id"];
	//print '. ';
	//print $row["title"];
	//print '<br>';
	
	$output = $output.$part1.$row["href"].$part2.$row["title"].$part3;
	
}

if($q=="")
	$output = "";

//sleep(1);

echo $output;
	

?>