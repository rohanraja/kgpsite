<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<meta content="text/css" http-equiv="Content-Style-Type">
<title>Indian Institute of Technology Kharagpur</title>
<script src="javascript/jquery.min.js"></script>
<script src="javascript/jquery-ui.min.js"></script>
<script type="text/javascript" src="javascript/slimScroll.js"></script>
<script src="javascript/modal.js"></script>

<link REL="shortcut icon" href="images/favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/newsboard.css"/>
<link rel="stylesheet" type="text/css" href="../fonts/stylesheet.css"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#upperbox
{
width:1024px;
height:300px;
margin-left:auto;
margin-right:auto;
}

#image
{
float:left;
width:510px;
height:300px;

}

#image img
{
width:510px;
height:300px;
}
.cont
{
width:490px;
height:45px;
padding-left:10px;
padding-top:10px;
padding-right:5px;
float:right;
background-color:#e6e6e6;
margin-bottom:6px;
font-size:14px;
}
.cont:hover
{
background-color:#b94941;
color:white;
cursor:pointer;

}

#menunews
{
clear:both;
margin-left:auto;
margin-right:auto;
width:700px;
}
#menunews a
{
text-decoration:none;
display:inline;
padding-right:10px;
padding-left:10px;
border-right:1px solid #4d4a4a;
font-size:120%;
color:#4d4a4a;
font-weight:bold;
font-family:robotoregular;
font-szie:14px;

}
#menunews a.active{
color:#b94941;
}
.cont1
{
clear:both;
width:1024px;
display:block;
position:relative;
border-top:1px solid;
padding-bottom:50px;
border-color:#6D7B8D;
margin-bottom:20px;


}  

.cont1:hover
{
	cursor: hand;
	opacity : 0.7;
}

.cont1 p , #content p
{
padding-top:15px;
color:#b94a41;
font-weight:normal;
font-size:17px;
margin-bottom:0px;

}




#slide{
height:72px;
overflow:hidden;
width:900px;
float:right;
margin-bottom:30px;
position:relative;
padding-top:-5px;
padding-right:50px;

}

#content #slide{
	
	height: auto;
}

#slide p{text-align:justify;color:#141517;}
#slide p a{text-decoration:none;}
.#slide pre
{
color:#141517;
font-family:robotoregular;

}
#datahold
{
width:1024px;

margin-left:auto;
margin-right:auto;
}
#date
{
margin-right:10px;
float:left;
text-align:center;
valign:center;
background-color:#b84940;
color:white;
width:60px;
height:50px;

}
#slide #more1
{
position:absolute;
bottom:-1px;
right:20px;
cursor:pointer;

z-index:1;
}

.lnding
{
	display: block;
	margin-left: auto;	
	margin-right: auto;
	margin-top: 57px;
	margin-bottom: 50px;
}

#moree
{
	text-align: center;

	margin-top: 57px;
	margin-bottom: 50px;
	font-family: robotoregular;
	font-size: 19px;
	font-weight: bold;
	
	
}

#moree:hover
{
	cursor: hand;
}
</style>



 <script type="text/javascript">
  $(document).ready(function(){
	  
	
	  
  $("#menunews a:first").addClass("active");
  $("#menunews a").click(function() {

		$("#menunews a").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		
		
		


		

	
	});   
 }); 
 $(function(){
 
 
 

 
 
 $("#databox").ajaxSend(function(e,xhr,opt){
$("#databox").html("<img src ='css/loading.gif'>");
 });
  $.post("newsboa.php",{id:0},function(result){
 //alert(result);
 $("#upperbox").append(result);
});

belowdata("students");

});
function popupc()
{

$("#credits").fadeIn();

}
 function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
function afterclick(a)
{

$.post("newsboa.php",{id:a},function(result){
 //alert(result);
 $("#image").html(result);
 
 $(".cont").css('background-color','#e6e6e6');

 $(document.getElementById(a)).css('background-color','#b94941');
 
 
});
}


var counter = {"students" : 1, "faculty" : 1, "alumni" : 1, "newsreleases" : 1, "iits" : 1};

var cnt ;

var isloading = 0;

function belowdata(b)
{
	
	$loadingimage = $('<img id="loadingimg" class="lnding" src="loading1.gif">');
	
	$("#datahold").empty().append($loadingimage);
	
	isloading = 1;

	
	counter = {"students" : 0, "faculty" : 0, "alumni" : 0, "newsreleases" : 0, "iits" : 0};

	$.post("newssort.php",{name:b, count: 0 },function(result){
	 	
	 	//alert(result);
	 	$("#datahold")[0].innerHTML = result;
	 	
	 		 	
	 	isloading = 0;
	 	
	 	$more = $('<div id="moree" onClick="expanddata(\'' + b +'\')">Earlier News</div>');
	 	
	 	$("#datahold").append($more);
	});
	
	
	currentcat = b ;


}

var currentcat = "students";



 $(window).scroll(function(){

	 	
	 	$("#footer")[0].innerHTML = ($(document).height() - $(window).height() - $(window).scrollTop());
	 	
 		if  (($(document).height() - $(window).height() - $(window).scrollTop()) == 0){
	 		
	 			if(!isloading)
	 			{
	 				expanddata(currentcat);
	 				isloading = 1;
	 			}
	 				
 		}
 });



function expanddata(b)
{
	
	$loadingimage = $('<img id="loadingimg" class="lnding" src="loading1.gif">');
		
	 $("#datahold").find("#moree").css("display", "none");
	
	$("#datahold").append($loadingimage);
	
	cnt = counter[b] ;
	counter[b] = counter[b] + 1 ;
	$.post("newssort.php",{name:b, count: cnt },function(result){

	 	//alert(result);
	 	$("#datahold")[0].innerHTML += result;
	 		 	
	 	$("#datahold").find("#loadingimg").css("display", "none");
	 	
	 	isloading = 0;
	 	
	 	
	 	$more = $('<div id="moree" onClick="expanddata(\'' + b +'\')">Earlier News</div>');
	 	
	 	$("#datahold").append($more);

	 	
	});

	



}

 
 function toanimate(c, elee)
 {
	 //console.log("here, toani");

	 //console.log($(elee).parent().parent().html());
	 
	 var innrhtmll = $(elee).html() ;
	 
	 modal.open({content: innrhtmll});
	 
	 $("#content").find("#more1").css("visibility", "hidden");
//	 $("body").css("overflow", "hidden");
	 

 }
</script>


</head>

<body>
<div class="header">
	<div id="contents">
	<div id='header'>
	<a href="http://www.iitkgp.ac.in"><div id='logo'>
	</div></a>
	<div id='adds'>
		<form  name="search" action="http://iitkgp.ac.in/search/main_search.php">
		<INPUT class="search_box" TYPE="text" NAME="search_string" value="Search" onFocus="clearText(this)" onBlur="clearText(this)">&nbsp;&nbsp;<INPUT  class="search_box"  style="display:none;" type="submit" name="bsubmit" value="Search">
		</form>
	</div>
	</div>
	</div>
</div>

<div id="contents" style="min-height:30px" >
<div class="menu-container">
	<div id="alpha"><a href="../institute/index.php">Institute</a></div>
	<div id="alpha"><a href="../academics/index.php">Academics</a></div>
	<div id="alpha"><a href="../students/index.php">Students</a></div>
	<div id="alpha"><a href="../happenings/index.php">HAPPENINGS</a></div>
	<div id="alpha"><a href="../timeline/index.php" target="_blank">Timeline</a></div>
	<div id="tabactive"><a href="../newsboard/index.php">Newsboard</a></div>
</div>
</div>