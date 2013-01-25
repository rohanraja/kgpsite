<?php include("commd/header.php")?>
<div id="contents">
<div id="left" style="width:400px;">

	<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                                <img src="commd/s2.jpg"  alt="" />
                                <img src="commd/s4.jpg" alt="" />
								<img src="commd/s3.jpg" alt="" />
								<img src="commd/s5.jpg" alt="" />
								<img src="commd/s1.jpg" alt="" />
            </div>
	</div>
</div>
<div id="right" style="width:400px; background:url(commd/round-shadow.png) no-repeat bottom center;">
	<img id="nxt" src="themes/next.png">
	<img id="prev" style=""src="themes/prev.png">
<div  class="heading"><p align="right" style=" font-size:14px; margin:0; padding:0">Conferences and Seminars</p></div>
<div id="news" style="padding-left:10px; background:#e7e3e3;">



					<p id="newscontp"></p>	

</div>
</div>
</div>
<div id="contents" style="min-height:40px"><div id="erp">
<ul id="list">
<li><a href="https://erp.iitkgp.ernet.in/IIT_ERP2/" target="_blank">Erp</a></li>
<li><a href="http://www.iitkgp.ac.in/train/" target="_blank">Trains</a></li>
<li><a href="jobs.php">Jobs</a></li>
<li><a href="http://www.iitkgp.ac.in/topfiles/former_emp.php" target="_blank">Former Employees</a></li>
<li><a href="http://iitkgp.ac.in/topfiles/wgraph.php" target="_blank">Campus Weather</a></li>
<li><a href="http://iitkgp.ac.in/topfiles/tenders.php" target="_blank">Tenders</a></li>
<li><a href="http://www.iitkgp.ac.in/topfiles/webmail.php" target="_blank">web Mail</a></li>
<li><a href="http://www.iitkgp.ac.in/commdir3/" target="_blank">Communication Directory</a></li>
<li><a href="http://www.iitkgp.ac.in/topfiles/chhutti_12.html" target="_blank">Holidays</a></li>
<li style="border-right:none;"><a href="http://noticeboard.iitkgp.ernet.in/" target="_blank">Internal Notice Board</a></li>
</ul>
</div>
</div>

<div id="contents">
<div id="left">
<div class='category' style="height:250px">
<div class='heading'>
Job Openings
</div>

<ul class="tabs">
  <li><a href="#tab1">Faculty Positions</a></li>
  <li><a href="#tab2" id="tmpassgn">Temporary Assignments</a></li>
  <li style="border-right:none;"><a href="#tab3">Non-teaching Positions</a></li>

</ul>
<div id="inner-content-div">
<!--Now this is the place for content-->
<div class="tab_container">
<div id="tab1" class="tab_content">

<a href="http://iitkgp.ac.in/downloads/Director_Recruitment.pdf" target="_blank">Directors, IIT Kharagpur and IIT Kanpur</a> 
<br/><br/>
<a href="http://iitkgp.ac.in/downloads/samudragupta.pdf" target="_blank">Samudragupta MoES Chair Professor </a>
<br/><br/>
<a href="http://iitkgp.ac.in/downloads/samudragupta_appform.pdf" target="_blank">Samudragupta MoES Chair Professor Application Form </a>
<br/><br/>
<a href="http://erp.iitkgp.ernet.in/FacultyCareer/homeFacultyCareer.jsp" target="_blank">Faculty Positions</a>


<!---Place for content-->
</div>

<div id="tab2" class="tab_content">

<img id="jnxt" src="themes/next.png">
<img id="jprev" style=""src="themes/prev.png">

<TABLE width='100%' id="tempjobtbl">
</TABLE>

<!---Place for content-->
</div>


<div id="tab3" class="tab_content">
<a href="http://iitkgp.ac.in/downloads/jpo_padmavati.pdf" target="_blank">Junior Project Officer (JPO) </a>


<!---Place for content-->
</div>




</div><!--Place for content over-->
</div>
</div>
</div>
<div id="right">
<div class='category' style="height:250px">
<div class='heading'>
Campus Highlights
</div>
<?php
mysql_selectdb("profiles");
$ord = "select * from newsboard where newstype='students' order by date1 desc limit 1";
$ord1 = "select * from newsboard where newstype='faculty' order by date1 desc limit 1";
$ord2 = "select * from newsboard where newstype='alumni' order by date1 desc limit 1";
$ord3 = "select * from newsboard where newstype='newsreleases' order by date1 desc limit 1";
$ord4 = "select * from newsboard where newstype='iits' order by date1 desc limit 1";

$res = mysql_query($ord);
$res1 = mysql_query($ord1);
$res2 = mysql_query($ord2);
$res3 = mysql_query($ord3);
$res4 = mysql_query($ord4);
$row = mysql_fetch_array($res);
?>
<div class="history">
<img src="commd/icon1.jpg"/>
</div>
<div class="description">
<?php echo $row['heading'] ?> 
</div>
<div style="clear:both"></div>
<div class="history">
<img src="commd/icon2.jpg"/>
</div>
<div class="description">
<?php $row = mysql_fetch_array($res1);
	echo $row['heading'];
?>
</div>
<div style="clear:both"></div>
<div class="history">
<img src="commd/icon3.jpg"/>
</div>
<div class="description">
<?php $row = mysql_fetch_array($res4);
	echo $row['heading'];
?>
</div>
<div style="clear:both"></div>
<!--<?php/*
echo "<p>".$row['heading']."<br/>";
$row=mysql_fetch_array($res1);
echo $row['heading']."<br/>";
$row=mysql_fetch_array($res2);
echo $row['heading']."<br/>";
$row=mysql_fetch_array($res3);
echo $row['heading']."<br/>";
$row=mysql_fetch_array($res4);
echo $row['heading']."<br/></p>";*/
?>-->

</div>
</div>
<div id="middle">
<div class='category' style="background:none;">
<div class='heading'>Admissions
</div>
<p align="justify" style="padding:5px;"><a href="http://www.iitkgp.ernet.in/jee/" target="_blank">JEE (Advanced)</a> |
<a href="http://gate.iitkgp.ac.in/" target="_blank"> GATE</a> |
<a href="http://gate.iitkgp.ac.in/jam/index.php" target="_blank"> JAM</a> | 
<a href="http://www.som.iitkgp.ernet.in/index.php?option=com_content&view=article&id=84&Itemid=298" target="_blank"> MBA</a> </p>
<p align="justify" style="padding:5px;">
<a href="http://www.som.iitkgp.ernet.in/images/stories/admissions/emba2011/online.htm" target="_blank"> EMBA</a> |
<a href="http://www.iitkgp.ac.in/topfiles/mtechs.php" target="_blank"> M.Tech/ MCP</a></p>
<p align="justify" style="padding:5px; padding-bottom:15px;">
<a href="http://gate.iitkgp.ac.in/mmst/" target="_blank">MMST</a> |
<a href="http://www.iitkgp.ac.in/downloads/mtech_140712.pdf" target="_blank"> QIP</a> |
<a href="http://www.iitkgp.ac.in/topfiles/law.php" target="_blank"> LLB</a> |
<a href="http://www.iitkgp.ac.in/mhrm/index.php" target="_blank"> MHRM</a> |
<a href="http://www.iitkgp.ac.in/topfiles/phd_pdf_top.php" target="_blank"> Ph.D, MS, PDF</a>
</p>
</div>
<div class='category' style="background:none;">
<div class='heading'>
Technology & Research
</div>

<p>Research Facilities<br/>
Research Areas<br/>
Tech Developed<br/>
Books Published
</p>
</div>
</div>
</div>

<div id="contents">
<div id="left">
<div class='category' >
<div class='heading'>
Academic Units
</div>
<div class="wrapper" style="float:left; font-size:12.5px; width:75%;">
<div id="maincontainer" style="width:60%; float:left;">
<div id="tabb1" class="tab_content1">
<a href="academics/?page=acadunits&&dept=AE">Aerospace Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=AG">Agricultural & Food Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=AR">Architecture & Regional Planning</a><br/>
<a href="academics/?page=acadunits&&dept=BT">Biotechnology</a><br/>
<a href="academics/?page=acadunits&&dept=CH">Chemical Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=CM">Chemistry</a><br/>
<a href="academics/?page=acadunits&&dept=CE">Civil Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=CS">Computer Science & Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=CR">Cryogenic Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=EE">Electrical Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=EC">Electronics & Electrical Communication Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=MG">Geology & Geophysics</a><br/>
<a href="academics/?page=acadunits&&dept=HS">Humanities & Social Sciences</a><br/>
<a href="academics/?page=acadunits&&dept=IM">Industrial Engineering & Management</a><br/>
<a href="academics/?page=acadunits&&dept=MS">Materials Science</a><br/>
<a href="academics/?page=acadunits&&dept=MM">Mathematics</a><br/>
<a href="academics/?page=acadunits&&dept=ME">Mechanical Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=MT">Metallurgical & Materials Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=MI">Mining Engineering</a><br/>
<a href="academics/?page=acadunits&&dept=NA">Ocean Engineering & Naval Architecture</a><br/>
<a href="academics/?page=acadunits&&dept=MP">Physics & Meteorology</a><br/>
</div>
<div id="tabb2" class="tab_content1">
<a href="academics/?page=acadunits&&dept=ED">Center for Educational Technology</a><br/>
<a href="academics/?page=acadunits&&dept=N2">Oceans, Rivers, Atmosphere and Land Sciences</a><br/>
<a href="academics/?page=acadunits&&dept=RE">Reliability Engineering Centre</a><br/>
<a href="academics/?page=acadunits&&dept=RT">Rubber Technology Centre</a><br/>
<a href="academics/?page=acadunits&&dept=RD">Rural Development Centre</a><br/>
</div>
<div id="tabb3" class="tab_content1">
<a href="academics/?page=acadunits&&dept=GS">G S Sanyal School of Telecommunications</a><br/>
<a href="academics/?page=acadunits&&dept=IT">Information Technology</a><br/>
<a href="academics/?page=acadunits&&dept=RJ">Rajendra Mishra School of Engineering Entrepreneurship</a><br/>
<a href="academics/?page=acadunits&&dept=RG">Rajiv Gandhi School of Intellectual Property Law</a><br/>
<a href="academics/?page=acadunits&&dept=ID">Ranbir and Chitra Gupta School of Infrastructure Design and Management</a><br/>
<a href="academics/?page=acadunits&&dept=MD">Medical Science & Technology</a><br/>
<a href="academics/?page=acadunits&&dept=WM">School of Water Resources</a><br/>
<a href="academics/?page=acadunits&&dept=SM">Vinod Gupta School of Management</a><br/>
</div>
</div>
</div>
<ul class="tabs1">
  <li><a href="#tabb1">Departments</a></li>
  <li><a href="#tabb2">Centres</a></li>
  <li><a href="#tabb3">Schools</a></li>
</ul>
</div>
</div>
<div id="right">
<div class='category' style="height:180px">
<div class='heading'>
Events List
</div>
<div class="news" style="top: 0px;">
<div class="history">
<div class="circle-outer">

<span class="day">1st</span>
<span class="elipses">...</span>
<span class="month">Feb</span>
</div></div>
<div class="description">
<h1><a href="http://www.ktj.in/">Kshitij 2013</a></h1>
<div class="detail"><p align="justify">Kshitij is the annual techno-management fest of IIT Kharagpur, one of the India’s premier technical institutions.</p></div></div>
</div>
<div style="clear:both"></div>
<div class='heading' style="background:#85b4c6; padding-bottom:0px;">
View all events ->
</div>
</div>
</div>
<div id="middle">
<div class='category' style="background:none;" >
	<img id="snxt" src="themes/next.png">
	<img id="sprev" style=""src="themes/prev.png">
<div class='heading' style="margin-bottom:10px">
Short Term Programmes

</div>

<p id="shortp">
</p>

</div>

</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {

		//When page loads...
		$(".tab_content").hide();
		//Hide all content
		$("ul.tabs li:first").addClass("active").show();
		//Activate first tab
		$(".tab_content:first").show();
		//Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active");
			//Remove any "active" class
			$(this).addClass("active");
			//Add "active" class to selected tab
			$(".tab_content").hide();
			//Hide all tab content

			var activeTab = $(this).find("a").attr("href");
			//Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn();
			//Fade in the active ID content
			return false;
		});
		//another click event
		//When page loads...
		$(".tab_content1").hide();
		//Hide all content
		$("ul.tabs1 li:first").addClass("active").show();
		//Activate first tab
		$(".tab_content1:first").show();
		//Show first tab content

		//On Click Event
		$("ul.tabs1 li").click(function() {

			$("ul.tabs1 li").removeClass("active");
			//Remove any "active" class
			$(this).addClass("active");
			//Add "active" class to selected tab
			$(".tab_content1").hide();
			//Hide all tab content

			var activeTab = $(this).find("a").attr("href");
			//Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn();
			//Fade in the active ID content
			return false;
		});

	}); 
</script>
<?php include("commd/footer.php") ?>