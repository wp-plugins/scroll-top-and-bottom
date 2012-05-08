		<?php $wp_STAB_icon_Select = get_option('STAB_icon_Select');
			 if($wp_STAB_icon_Select != true){
			 $wp_STAB_icon_Select =2;
			 }
		
		 ?>
        <div style="display:none;" class="nav_up" id="nav_up">
         <?php echo '<img src="' .plugins_url( 'scroll-top-and-bottom/icon/'.$wp_STAB_icon_Select.'_u.ico' , dirname(__FILE__) ). '" > '; ?>
          </div>
		<div style="display:none;" class="nav_down" id="nav_down">
         <?php echo '<img src="' .plugins_url( 'scroll-top-and-bottom/icon/'.$wp_STAB_icon_Select.'_d.ico' , dirname(__FILE__) ). '" > '; ?>
        </div>
		
		<script>
			$(function() {
				var $elem = $('body');
				
				$('#nav_up').fadeIn('slow');
				$('#nav_down').fadeIn('slow');  
				
				$(window).bind('scrollstart', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
				});
				$(window).bind('scrollstop', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
				});
				
				$('#nav_down').click(
					function (e) {
						$('html, body').animate({scrollTop: $elem.height()}, 800);
					}
				);
				$('#nav_up').click(
					function (e) {
						$('html, body').animate({scrollTop: '0px'}, 800);
					}
				);
            });
        </script>