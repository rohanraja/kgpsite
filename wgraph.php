<title>Indian Institute of Technology Kharagpur</title>
<STYLE type=text/css>
h3 {margin: 0px; font-family: arial; font-size:14px; font-weight:normal; color: #000080; text-align: center};
h4 {margin-top:-5px; margin-bottom:5px; font-family: arial; font-size:16px; font-weight:bold; color: #660000; text-align: center};

table.out {border: 1px thin solid;};
	  .graph { width:40px; border:0; cellpadding:0; cellspacing:0; };
td.in {font-family: arial; font-size: 12px; font-weight: bold; color: #000080; text-align: center};
td.inn {font-family: arial; font-size: 12px; font-weight: normal; color: #000080; text-align: center};
.text {font-family: arial; font-size: 12px; font-weight: normal; color: blue; text-align: center};
.text1 {border-bottom:0px #d0d0d0 solid; font-family: arial; font-size: 12px; font-weight: normal; color: blue; text-align: center};
.text2 {border-bottom:0px #d0d0d0 solid; font-family: arial; font-size: 12px; font-weight: normal; color: #ff8888; text-align: center};
.text3 {border-bottom:0px gray solid; font-family: arial; font-size: 12px; font-weight: normal; color: #ff8888; text-align: center};

</style>
<?php	include("connect_server.php");
	$link=@mysql_select_db("profiles") or die("Could not connect to database");
	$query=@mysql_query("SELECT * FROM weather order by data_date desc limit 10"); ?>   
<?php
for($i=0; $i<10; $i++)
{
	$row=@mysql_fetch_array($query);
	$adate = $row["data_date"];
	$forshortdate=explode("-","$adate");
	$pdate = date ("Y-m-d", mktime (0,0,0,$forshortdate[1],$forshortdate[2],$forshortdate[0]-1));
	$ppdate = date ("Y-m-d", mktime (0,0,0,$forshortdate[1],$forshortdate[2],$forshortdate[0]-2));
	$dateandmonth[$i]=$forshortdate[2]."-".$forshortdate[1];
	$aaadate[$i]=$row["data_date"];
	$aaaamax[$i]=$row["temp_max"];
	$aaaamin[$i]=$row["temp_min"];
	$aaarain[$i]=$row["rainfall"];

	$query2=@mysql_query("SELECT * FROM weather where data_date = '$pdate'");    
	$row2=@mysql_fetch_array($query2);
	$pmax[$i]=$row2["temp_max"];
	$pmin[$i]=$row2["temp_min"];
	$prain[$i]=$row2["rainfall"];

	$query3=@mysql_query("SELECT * FROM weather where data_date = '$ppdate'");    
	$row3=@mysql_fetch_array($query3);
	$ppmax[$i]=$row3["temp_max"];
	$ppmin[$i]=$row3["temp_min"];
	$pprain[$i]=$row3["rainfall"];

}
?>
<h4>Campus Weather during last ten days</h4>
<h3>Maximum Temperature (Celsius)</h3>
<table class=out align=center border=0>
<tr><td>&nbsp;</td>
<?php
for($i=0; $i<10; $i++)
{
?>
<td valign=bottom>
<table height="<?php echo $aaaamax[$i] ?>" class=graph bgcolor="#FF0000" cellspacing=0 cellpadding=0>
  <tr>
    <td></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>

<tr><td class=inn valign=bottom>2012<br><FONT COLOR="#ff8888">2011<br>2010</FONT></td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=middle>

<table width=40px cellpadding="0" cellspacing="0" bgcolor="" border=0>
  <tr>
    <td class=text1 valign=top><?php echo $aaaamax[$i] ?></td>
  </tr>
  <tr>
    <td class=text3 valign=top><?php echo $pmax[$i] ?></td>
  </tr>
  <tr>
    <td class=text2 valign=top><?php echo $ppmax[$i] ?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>

<tr><td class=inn>Date</td>
<?php
for($i=0; $i<10; $i++)

{
	?>
<td valign=bottom>

<table width=40px border="0" cellpadding="0" cellspacing="0" bgcolor="">
  <tr>
    <td class=text valign=top><?php echo $dateandmonth[$i]?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>


</table>



<br>



<h3>Minimum Temperature (Celsius)</h3>
<table class=out align=center>
<tr><td>&nbsp;</td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>
<table height="<?php echo $aaaamin[$i] ?>" class=graph bgcolor="#66FF99" cellspacing=0 cellpadding=0>
  <tr>
    <td></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>

<tr><td class=inn valign=bottom>2012<br><FONT COLOR="#ff8888">2011<br>2010</FONT></td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>

<table width=40px border="0" cellpadding="0" cellspacing="0" bgcolor="">
  <tr>
    <td class=text><?php echo $aaaamin[$i] ?></td>
  </tr>
  <tr>
    <td class=text2 valign=top><?php echo $pmin[$i] ?></td>
  </tr>
  <tr>
    <td class=text2 valign=top><?php echo $ppmin[$i] ?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>

<tr><td class=inn>Date</td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>

<table width=40px border="0" cellpadding="0" cellspacing="0" bgcolor="">
  <tr>
    <td class=text><?php echo $dateandmonth[$i] ?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>
</table>
<br>
<h3>Rainfall (mm)</h3>
<table class=out align=center>
<tr><td>&nbsp;</td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>
<table height="<?php echo $aaarain[$i] ?>" class=graph bgcolor="#86B5EE" cellspacing=0 cellpadding=0>
  <tr>
    <td></td>
  </tr>
</table>
</td>
<?php 
	} 
?>
</tr>
<tr><td class=inn valign=bottom>2012<br><FONT COLOR="#ff8888">2011<br>2010</FONT></td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>

<table width=40px border="0" cellpadding="0" cellspacing="0" bgcolor="">
  <tr>
    <td class=text><?php echo $aaarain[$i] ?></td>
  </tr>
  <tr>
    <td class=text2 valign=top><?php echo $prain[$i] ?></td>
  </tr>
  <tr>
    <td class=text2 valign=top><?php echo $pprain[$i] ?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>

<tr><td class=inn>Date</td>
<?php
for($i=0; $i<10; $i++)
	{
?>
<td valign=bottom>

<table width=40px border="0" cellpadding="0" cellspacing="0" bgcolor="">
  <tr>
    <td class=text><?php echo $dateandmonth[$i]?></td>
  </tr>

</table>
</td>
<?php 
	} 
?>
</tr>
</table>

