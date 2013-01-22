<?php

include ("connect_server.php");


$count = $_GET['count'];

$maxtakeoutrows = 2 ;

$startindex = $count*$maxtakeoutrows ;

$link = @mysql_select_db("profiles") or die("Could not connect to database");
$query = mysql_query("SELECT * FROM sric_jobs ORDER BY last_date ASC limit $startindex, $maxtakeoutrows"); // WHERE ((last_date-curdate())>=0)
$num_rows = @mysql_num_rows($query);

$tableinit = " <TR bgcolor=silver>

<TD width=70%><B>Temporary Position(s)</B></td><td width=14%><B>Number of <BR>Vacancies</B></td><td width=16%><B>Last Date of <BR>Application</B></td>
";

$output = "";

$output = $output.$tableinit;

while ($row = @mysql_fetch_array($query)) {
	$serial = $row["serial_no"];
	$post_name = $row["temp_post"];
	$coordinator = $row["coordinator"];
	$vacancies = $row["no_of_vacancies"];
	$last_date = $row["last_date"];
	$date_part = explode("-", $last_date);
	$made_date = date("d M Y", mktime(0, 0, 0, $date_part[1], $date_part[2], $date_part[0]));

	$output = $output.'<tr><td><a href="/topfiles/sric_job_details.php?serial='.$serial.'">'.$post_name.'</a><BR><FONT SIZE="1" COLOR="brown">(PI: '.$coordinator.')</FONT> </td> <td align=center>'.$vacancies.'</td><td>'.$made_date.'</td>';//<?php echo  $coordinator </FONT> </td>   <td align=center><?php echo  $vacancies </td><td> echo $made_date </td>
	

}


echo $output;
?>
