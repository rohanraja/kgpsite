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
<!--[if gte IE 6]>
<link rel="stylesheet" type="text/css" href="commd/stylesheetIE.css" />
<![endif]-->
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
		$('#stp').slimScroll({
        height: '125px',
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
		<li><a href="institute/#/aboutus" title="">About Us</a>
		<ul><li><a href="institute/#/director" title="">Director</a></li>
		<li><a href="institute/#/administration" title="">Administration</a></li>
		<li><a href="institute/#/reports" title="">Annual Reports</a></li>
		</ul></li>
		<li><a href="institute/#/tnp" title="">Training and Placements</a>
		<ul><li><a href="institute/#/mou" title="">International Relations</a></li>
		<li><a href="institute/#/idp" title="">Institute Development Programme</a></li>
		<li><a href="institute/#/diamondjubilee" title="">Diamond Jubilee</a></li>
		</ul></li>
		<li><a href="map/" title="">Campus Map</a><ul >
		<li><a href="institute/#/campus" title="">Campus Details</a></li>
		<li><a href="institute/#/extension" title="">Extension Centres</a></li>
		<li><a href="timeline/" target="_blank" title="">60 years timeline</a></li>
		</ul></li>
		<li><a href="institute/#/honors" title="">Institute Honours</a>
		<ul><li><a href="http://www.iitkgp.org" title="" target="_blank">Alumni Portal</a></li></ul></li>
		</ul>
	</div>
	<div style="clear:both;"></div>
	<h3 class="accordion-header-2"><span title="" class="accordion-link">Academics</h3>
	<div class="accordion-content-2"><ul ><li><a href="academics/?page=acadunits" title="">Academic Units</a>
	<ul>
	<li><a href="academics/?page=researchfac" title="">Research Facilities</a></li>
	<li><a href="academics/?page=research" title="">Research Areas</a></li>
	<li><a href="academics/?page=tech" title="">Tech Development</a></li></ul></li>
	<li><a href="academics/?page=books" title="">Books Published</a><ul>
	<li><a href="http://www.dak.iitkgp.ernet.in/phd/" target="_blank" title="">Doctorates Info System</a></li>
	<li><a href="academics/?page=curriculum" title="">Academic Curriculum</a></li>
	<li><a href="academics/?page=acads" title="">Academic Programmes</a></li></ul></li>
	<li><a href="http://www.iitkgp.ac.in/downloads/acad_cal201213R.pdf" target="_blank" title="">Academic Calendar</a>
	<ul>
	<li><a href="http://www.iitkgp.ac.in/cep/" target="_blank" title="">Continuing Education Centre</a></li>
	<li><a href="http://www.library.iitkgp.ernet.in/" target="_blank" title="">Central Library</a></li></ul></li>
</ul></div>
<h3 class="accordion-header-3"><span title="" class="accordion-link">Students</h3>
<div class="accordion-content-3"><ul ><li><a href="students/?page=dosa" title="">Dean of Student Affairs</a><ul >
<li><a href="students/?page=halls" title="">Halls of Residence</a></li>
<li ><a href="http://www.gymkhana.iitkgp.ernet.in/" target="_blank" title="">Gymkhana</a></li>
<li ><a href="students/?page=counselling" title="">Counselling Centre</a></li>
</ul></li>
<li><a href="students/?page=mentorship" title="">Mentorship Programmes</a><ul >
<li><a href="http://www.iitkgp.ac.in/downloads/SIP2012_13.pdf" target="_blank" title="">Student Insurance Policy</a></li>
<li ><a href="students/?page=fees" title="">Semester Fee Payment</a></li>
</ul></li>
</ul></div>

<h3 class="accordion-header-4"><span title="" class="accordion-link">Timeline</h3>
<div class="accordion-content-4">
<ul><li><a href="timeline/" title="">Click here for IIT Kharagpur's timeline</a></li></ul>
</div>
<h3 class="accordion-header-5"><span title="" class="accordion-link"><a href="newsboard/">Newsboard</a></h3>

</div>

</div>
</div>