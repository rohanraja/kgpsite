			var modal = (function(){
				var 
				method = {},
				$overlay,
				$modal,
				$content,
				$close;
			
				// Center the modal in the viewport
				method.center = function () {
					var top, left;
					
					$("#content").css("max-height",0.85*$(window).height());

					top = Math.max($(window).height() - $modal.outerHeight(), 0) / 2;
					left = Math.max($(window).width() - $modal.outerWidth(), 0) / 2;
			
					$modal.css({
						top:top, //+ $(window).scrollTop(), 
						left:left //+ $(window).scrollLeft()
						
					});
					
					};
			
				// Open the modal
				method.open = function (settings) {
					$('#modal, #content, .slimScrollDiv').css('height', 'auto');
					$content.empty().append(settings.content);
			
					$modal.css({
						width: settings.width || 'auto', 
						height: settings.height || 'auto'
					});
			
					method.center();
					$(window).bind('resize.modal', method.center);
					
					


					
					$modal.show();
					  
					var maxht = $('#content').css('height');
					
							if(maxht>0.85*$(window).height())
								maxht = 0.85*$(window).height() ;
							
							$('#content').slimScroll({
								  height : maxht,
								  alwaysVisible: false
							  });
					
					$overlay.show();
				};
			
				// Close the modal
				method.close = function () {
					$("body").css("overflow", "auto");
					$modal.hide();
					$overlay.hide();
					$content.empty();
					$(window).unbind('resize.modal');
				};
			
				// Generate the HTML and add it to the document
				$overlay = $('<div id="overlay"></div>');
				$modal = $('<div id="modal"></div>');
				$content = $('<div id="content"></div>');
				$close = $('<a id="close" href="#">close</a>');
				
			
				$modal.hide();
				$overlay.hide();
				$modal.append($content, $close);
			
				$(document).ready(function(){
					$('body').append($overlay, $modal);						
				});
			
				$close.click(function(e){
					e.preventDefault();
					method.close();
				});
			
				return method;
			}());
			

			
			
			
			
			
			

