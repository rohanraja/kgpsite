<div style="clear:both"></div>
<div id="topfooter">
<div id="contents">
<div class="block">
<b>Contact</b><br/>
 Indian Institute of Technology Kharagpur<br/>
 Kharagpur <br/>
 India - 721302 <br/> +91-3222-255221 <br/> FAX : +91-3222-255303<br/>

</div>
<div class="block">
<b>Campus Weather</b><br/><br/>


<?php 
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
$query=mysql_query("SELECT * FROM `weather` order by data_date desc limit 1");
echo mysql_error();
$row=@mysql_fetch_array($query);
	$adate = $row["data_date"];
	$forshortdate=explode("-","$adate");
	//$pdate = date ("Y-m-d", mktime (0,0,0,$forshortdate[1],$forshortdate[2],$forshortdate[0]-1));
	//$ppdate = date ("Y-m-d", mktime (0,0,0,$forshortdate[1],$forshortdate[2],$forshortdate[0]-2));
	//$dateandmonth=$forshortdate[2]."-".$forshortdate[1];
	$aaadate=$row["data_date"];
	$aaaamax=$row["temp_max"];
	$aaaamin=$row["temp_min"];
	$aaarain=$row["rainfall"];

	echo "Max: ".$aaaamax."&deg;C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Min: ".$aaaamin."&deg;C&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Rainfall: ".$aaarain." mm<br/><br/>";

?>

<b>Campus Map</b><br/>
</div>
<div class="block_right">
<b>Feedback</b>

</div>
<div class="block_right">

<b><div id="click1" style="cursor:pointer;">Credits</div></b>
<ul class="linkfooter" id="toggle1">

<li><a href="#">Subhadeep Mondal</a></li>
<li><a href="#">Sourav Shaw</a></li>
<li><a href="#">Deepak Kiran</a></li>
<li><a href="#">Sarika Sivareena</a></li>
</li><i>More Credits</i></li>
</ul><br/>
<b>Feedback</b>
</div>
<div class="block_right">
<b>Quick Links</b>
<ul class="linkfooter">
<li><a href="#">For Students</a></li>
<li><a href="#">Site Map</a></li>
<li><a href="#">Campus Map</a></li>

<li><a href="#">Academic Calendar</a></li>
</ul>
</div>

</div></div><div style="clear:both"></div>
<div id="footer">
	<p>Copyright &copy; 2013 Indian Institute of Technology Kharagpur, India
	
 

	
	</p>
</div>
<script type="text/javascript">
	       $(document).ready(function() {
		     $('#toggle1').hide();
			
               });
		   $('#click1').click(function() {
             $('#toggle1').toggle('slow', function() {
             // Animation complete.
             });
            });
			
		</script>	


</body>
</html>