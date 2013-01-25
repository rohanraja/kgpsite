<html>

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
background-color:#1f7898;

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
font-size:14px;

}
#menunews a.active{
color:#1f7898;
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
color:#1f7898;
font-weight:normal;
font-size:13px;
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
background-color:#1f7898;
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
	font-size: 15px;
	font-weight: bold;
	color:#1f7898;
	
}

#moree:hover
{
	cursor: hand;
}

			#overlay {
				position:fixed; 
				top:0;
				left:0;
				width:100%;
				height:100%;
				background:#000;
				opacity:0.5;
				filter:alpha(opacity=50);
				z-index:10;
			}
			
			#modal {
				position:fixed;
				background:url(tint20.png) 0 0 repeat;
				background:rgba(0,0,0,0.2);
				border-radius:5px;
				//overflow-y:scroll;
				//max-height: 20px;
				//width: 100px;
				padding:8px;
				z-index:10;
			}
			
			#content {
			
				//border-radius:8px;
				background:#fff;
				overflow-y:scroll;
				//max-height: 200px;
				max-width: 1100px;
				padding:20px;
				z-index:10;

			}
			#close {
				position:absolute;
				background:url("close1.png") 0 0 no-repeat;
				width:24px;
				height:27px;
				display:block;
				text-indent:-9999px;
				top:-7px;
				right:-7px;
			}




</style>

<?php include("../common/header.php")?>
<script type="text/javascript" src="javascript/slimScroll.js"></script>
<script src="javascript/modal.js"></script>
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
 
 
 $('.cont').each(function (index, val) {
 
 	 console.log(parseInt($(val).attr('id')));
 	 imgindex.push(parseInt($(val).attr('id')));
 
  });
 
 
 change_img();
 
 
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
 $(".cont:hover").css('background-color','#1f7898');
 $(document.getElementById(a)).css('background-color','#1f7898');

 
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

	
	counter ={"students" : 1, "faculty" : 1, "alumni" : 1, "newsreleases" : 1, "iits" : 1};

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
	

	<div id="upperbox">
	
	</div><br>
	
	<div id="menunews">
	<a href="#" onclick="belowdata('students')">Students</a>
	<a href="#" onclick="belowdata('faculty')">Faculty</a>
	<a href="#" onclick="belowdata('alumni')">Alumni</a>
	<a href="#" onclick="belowdata('newsreleases')">News Release</a>
	<a href="#" onclick="belowdata('iits')" style="border-right:none;">Campus News</a>
	
	</div><br>

	<div id="datahold">
	
	</div>
<?php
include("../common/footer.php");
?>


<script>
	
	//Auto-change-image
	
	 var imgindex = [];
	 
	 var indx = 0;
	 	

	
	var tmout;
	
	function change_img()
	{
		afterclick(imgindex[indx]);
		indx++;
		if(indx==5)
			indx = 0;
		
		setTimeout(change_img,4000);
	
	}	
	
	
	
</script>


</html>