$.post("news.php",function(result){
 $("#news").html(result);});
	
	
	$("#news").ajaxComplete(function(){
  
	
	
	$('#news').cycle({
        speed:       800,
        timeout:     4000,
        fx:'scrollLeft',
		
        
    });
	
	});
	
	
	$.post("news_scroll.php",function(result){
 $("#news_scroll").append(result);});

	
	
	$("#news_scroll").ajaxComplete(function(){
  
	
	$('.newsdata').cycle({
        speed:       800,
        timeout:     4000,
        fx:'scrollUp',
        
    });

 });
 
	
	

 
