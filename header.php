<!DOCTYPE html>
<?php	include("connect_server.php");?>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<meta content="text/css" http-equiv="Content-Style-Type">
<title>Indian Institute of Technology Kharagpur</title>
<link REL="shortcut icon" href="commd/favicon.ico">
<script src="commd/jquery.min.js"></script>
<script src="commd/jquery-ui.min.js"></script>
<script src="commd/slimScroll.min.js"></script>
<script src="commd/jquery.nivo.slider.pack.js"></script>
<script src="commd/jquery.nivo.slider.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"/>
<link rel="stylesheet" type="text/css" href="commd/stylesheet.css"/>
<link rel="stylesheet" type="text/css" href="commd/accordion.css"/>
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="commd/nivo-slider.css" type="text/css" media="screen" />



<script>jQuery(function() {
jQuery('.accordion-menu-1').accordion({ animated: 'slide', autoHeight: false, clearStyle: false, fillSpace: false, event: 'mousedown', header: 'h3', collapsible: true, navigation: false, cookie: { path: '/' }, active: false });
});
$(function(){
   
	$('#news').slimScroll({
        height: '205px',
		alwaysVisible:true
    });
	$('#maincontainer').slimScroll({
        height: '120px',
		alwaysVisible:true
    });
});
</script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            directionNav:true,
			pauseTime: 5000
        });
    });
    </script>
</head>
<body>

<div class="header">
	<div id="contents">
	<a href="http://www.iitkgp.ac.in"><div id='logo'>
	</div></a>
	<div id="searchwrapper"><form  name="search" action="http://iitkgp.ac.in/search/main_search.php">
	<input type="text" class="searchbox" name="search_string" value=""  />
    <button type="submit" class="searchbox_submit">
    <img src="commd/pointer-right.png"></img>
    </button>
    </form>
    </div>
	</div>
</div>
    <div id="contents" style="min-height:40px">
	<div id="accordion-menu-1">   
	<div class="accordion-menu-wrapper accordion-menu-1 accordion-menu-name-top-navigation-bar accordion-menu-source-menu-navigation-bar">
	<h3 class="accordion-header-1"><span title="" class="accordion-link">Institute</h3>
	<div class="accordion-content-1">
		<ul>
		<li><a href="/content/energy-biosciences-institute" title="">About Us</a>
		<ul><li>Director</li>
		<li>Administration</li>
		<li>Annual Reports</li>
		</ul></li>
		<li><a href="/content/ebi-leadership" title="">Training and Placements</a><ul><li><span title="">International Relations</li>
		<li>Institute Development Programme</li>
		<li>Diamond Jubilee</li>
		</ul></li>
		<li><a href="/content/core-support" title="">Campus Map</a><ul >
		<li>Campus Details</li>
		<li>Extension Centres</li>
		<li>60 years timeline</li>
		</ul></li>
		<li><a href="/jobs" title="">Institute Honours</a>
		<ul><li><a href="/jobs" title="">Alumni Portal</a></ul></li>
		</ul>
	</div>
	<div style="clear:both;"></div>
	<h3 class="accordion-header-2"><span title="" class="accordion-link">Academics</h3>
	<div class="accordion-content-2"><ul ><li><a href="/research/feedstock" title="">Academic Units</a>
	<ul>
	<li><a href="/research/biomass" title="">Research Facilities</a></li>
	<li><a href="/research/biofuels" title="">Research Areas</a></li>
	<li><a href="/research/fossilfuel" title="">Tech Development</a></li></ul></li>
	<li><a href="/research/environmental" title="">Books Published</a><ul>
	<li>Doctorates Info System</li>
	<li>Academic Curriculum</li>
	<li>Academic Programmes</li></ul></li>
	<li><a href="/research/feedstock" title="">Academic Calender</a>
	<ul>
	<li><a href="/research/biomass" title="">Continuing Education Centre</a></li>
	<li><a href="/research/biofuels" title="">Central Library</a></li></ul></li>
</ul></div>
<h3 class="accordion-header-3"><span title="" class="accordion-link">Students</h3>
<div class="accordion-content-3"><ul ><li><a href="/news" title="">Dean of Student Affairs</a><ul ><li >Halls of Residence</li>
<li >Gymkhana</li>
<li >Counselling Centre</li>
</ul></li>
<li><a href="/events" title="">Mentorship Programmes</a><ul ><li >Student Insurance Policy</li>
<li >Counselling Centre</li>
<li >Semester Fee Payment</li>
</ul></li>
</ul></div>

<h3 class="accordion-header-4"><span title="" class="accordion-link">Timeline</h3>
<div class="accordion-content-4"></div>
<h3 class="accordion-header-5"><span title="" class="accordion-link">Newsboard</h3>

</div>

</div>
</div>