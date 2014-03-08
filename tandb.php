		<?php $wp_STAB_icon_Select = get_option('STAB_icon_Select');
			  $wp_STAB_scroll_speed = get_option('STAB_scroll_speed');
			 if($wp_STAB_icon_Select != true){
			 $wp_STAB_icon_Select =2;
			 }
		
		 ?>
        <div style="display:none;" class="scroll-to-top" id="scroll-to-top">
         <?php echo '<img alt="&uarr;" width="32" height="32" src="' .plugins_url( 'scroll-top-and-bottom/icon/'.$wp_STAB_icon_Select.'_u.ico' , dirname(__FILE__) ). '" > '; ?>
        </div>
		<div style="display:block;" class="scroll-to-bottom" id="scroll-to-bottom">
         <?php echo '<img alt="&darr;" width="32" height="32" src="' .plugins_url( 'scroll-top-and-bottom/icon/'.$wp_STAB_icon_Select.'_d.ico' , dirname(__FILE__) ). '" > '; ?>
        </div>
		
		<script>
			$(document).ready(function() {

				$(window).scroll(function() {
				      if ($(this).scrollTop() > 200) {
				         $('#scroll-to-top').fadeIn('slow').css('right','66px');
				      } else {
				          $('#scroll-to-top').fadeOut('slow');
				      }

					if ($(this).scrollTop() > $(document).height() - screen.height) {
				         $('#scroll-to-bottom').fadeOut('slow');
				      } else {
				         $('#scroll-to-bottom').fadeIn('slow');
				      }

				 }); 
			
				   $('.scroll-to-top').click(function(){
				      $("html,body").animate({ scrollTop: 0 }, <?php if($wp_STAB_scroll_speed=="") echo "1000"; else echo "$wp_STAB_scroll_speed";?>);
				      return false;
				   });
				   $('.scroll-to-bottom').click(function(){
				      $('html,body').animate({scrollTop: $(document).height()}, <?php if($wp_STAB_scroll_speed=="") echo "1000"; else echo "$wp_STAB_scroll_speed";?>);
				      return false;
				   });
            });
 			</script>