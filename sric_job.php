<?php
	include("connect_server.php");
	$link=@mysql_select_db("profiles") or die("Could not connect to database");
	$query=mysql_query("SELECT * FROM sric_jobs WHERE ((last_date-curdate())>=0) ORDER BY last_date ASC");
	$num_rows=@mysql_num_rows($query);

?>
<style>
a {text-decoration:none; font-family:verdana; font-size:12px; color:#000080;}
a:hover {text-decoration:underline; font-family:verdana; font-size:12px; color:red;}
td {text-decoration:none; font-family:verdana; font-size:12px; color:#000080;}
</style>

<table cellpadding="8" cellspacing="0" border="0" align=center>
	<TR>
		<TD><FONT size=3 COLOR="#800000" face=verdana><B>Temporary Assignments</B></font>
		</TD>
	</TR>
<tr><td class="main" width="80%">
<div align="justify">
<CENTER><B><Big>Sponsored Research and Industrial Consultancy</Big></B></CENTER><BR><BR>
<P>Applications are invited on plain paper for the following assignment on a 
purely time bound Project undertaken in the various Departments / Centres / 
Schools of the Institute.<BR><BR>Interested eligible persons may apply (<B>quote 
SRIC Reference on the top of the Application</B>) on plain paper giving full 
bio-data along with attested copies of testimonials and a demand draft of the application fee drawn in favour of IIT Kharagpur payable at Kharagpur on or before last date mentioned against each.<br><br>Selected candidates shall be allowed to register for MS/PhD subject to their fulfillment of the requirement for MS/PhD admission in IIT Kharagpur.<br><br>
Applications may be 
submitted to:<BR><BR>Administrative Officer (Projects)<BR>Sponsored Research and 
Industrial Consultancy<BR>Indian Institute of Technology<BR>Kharagpur 
721302<BR><BR>
</div>
<!-- <b>Serial Number: <?php echo $row["serial_no"]; ?> </b><br> -->
<TABLE width='100%'>
  <TR bgcolor=silver>
    <TD width=70%><B>Temporary Position(s)</B></td><td width=14%><B>Number of <BR>Vacancies</B></td><td width=16%><B>Last Date of <BR>Application</B></td>
<?php
while($row=@mysql_fetch_array($query)) {
$serial=$row["serial_no"];
$post_name=$row["temp_post"];
$coordinator=$row["coordinator"];
$vacancies=$row["no_of_vacancies"];
$last_date=$row["last_date"];
$date_part=explode("-", $last_date);
$made_date = date("d M Y", mktime (0,0,0, $date_part[1] , $date_part[2]+$iii, $date_part[0]));

?>
 <tr><TD><a href="/topfiles/sric_job_details.php?serial=<?php echo $serial; ?>"><?php echo $post_name  ?></a><BR>&nbsp;&nbsp;&nbsp;&nbsp;<FONT SIZE="1" COLOR="brown">(PI: <?php echo  $coordinator ?>)</FONT> </td>   <td align=center><?php echo  $vacancies ?></td><td><?php echo $made_date ?></td></tr>
<?php }?> 
  <TR bgcolor=silver height=10><Td colspan=3>
  </TABLE>
</table>

