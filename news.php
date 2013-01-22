
<newslist title="Latest News">
<?php

$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
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
$row=mysql_fetch_array($res);

$row1=mysql_fetch_array($res1);

$row2=mysql_fetch_array($res2);

$row3=mysql_fetch_array($res3);

$row4=mysql_fetch_array($res4);

?>
  <news url="#">
    <headline><?php echo "hello".$row['heading']."<br/>";?></headline>
    <detail></detail>
  </news>

<news url="#">
    <headline><?php echo "hello".$row1['heading']."<br/>";?></headline>
    <detail></detail>
  </news>

  
<news url="#">
    <headline><?php echo "hello".$row2['heading']."<br/>";?></headline>
    <detail></detail>
  </news>

  
<news url="#">
    <headline><?php echo $row3['heading']."<br/>";?></headline>
    <detail></detail>
  </news>

  
<news url="#">
    <headline><?php echo $row4['heading']."<br/>";?></headline>
    <detail></detail>
  </news>

  
</newslist>