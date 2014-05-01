<?php
/*
Plugin Name: Scroll Top and Bottom
Plugin URI: http://shariarbd.com/plugins/scroll-top-and-bottom/
Description: Scroll Top and Bottom is created to scroll to top and bottom of the site. User can go to top and bottom of the site using this tool easily. Now you can control the scrolling speed! 12 different icon has been added and you can choose them from settings. <stron>Custom Button uploader added, now it's posible set your own button</stron>. This plugin is created with jQuery and <a href="http://shariarbd.com/" target="_blank">Demo is here.</a> Plugin is created by <cite><a href="http://shariarbd.com/" title="Md. Sahriar">Md. Shariar</a>.</cite>
Version: 2.8
Author: Md. Shariar
Author URI: http://shariarbd.com/ 
*/



define ( 'STAB_Plugin_url', plugin_dir_url(__FILE__)); // with forward slash (/).

	function stab_plugin_menu()
	{
	add_menu_page('Scroll Top Bottom' , 'Scroll Top Bottom', 'manage_options', 'stab_plugin_page', 'stab_plugin_page');
	}
add_action('admin_menu', 'stab_plugin_menu');


	
function stab_admin_js() 
{
 if (isset($_GET['page']) && $_GET['page'] == 'stab_plugin_page')
	 {
		 wp_enqueue_script('jquery');
		 wp_enqueue_script('media-upload');
		 wp_enqueue_script('thickbox');
		 wp_register_script('my-upload', STAB_Plugin_url.'js/stab_admin.js', array('jquery','media-upload','thickbox'));
		 wp_enqueue_script('my-upload');
	 }
}

function stab_admin_styles()
{
 if (isset($_GET['page']) && $_GET['page'] == 'stab_plugin_page')
	 {
		 wp_enqueue_style('thickbox');
	 }
}
add_action('admin_print_scripts', 'stab_admin_js');
add_action('admin_print_styles', 'stab_admin_styles');
 
 

 function stab_plugin_page()
 {
    if(isset($_POST['STAB_UPDATE'])){
    update_option('STAB_icon_Select',$_POST['STAB_icon_Select']);
    update_option('STAB_jquery',$_POST['STAB_jquery']);
    update_option('STAB_scroll_speed',$_POST['STAB_scroll_speed']);
    update_option('stab_up_btn',$_POST['stab_up_btn']);
    update_option('stab_down_btn',$_POST['stab_down_btn']);
    
    echo '<h3>Plugin has been updated.</h3>';
    }
    $wp_STAB_icon_Select = get_option('STAB_icon_Select');
    $wp_STAB_jQuery_deactive = get_option('STAB_jQuery_deactive');
    $wp_STAB_scroll_speed = get_option('STAB_scroll_speed');
    $stab_up_btn = get_option('stab_up_btn');
    $stab_down_btn = get_option('stab_down_btn');


 		echo '<div class="wrap">';
		echo '<div id="icon-options-general" class="icon32"></div>';
		?>
<style type="text/css">
    .icon_choose input{
      margin-bottom:10px;
      }

    .welcome-panel h3{
      margin: 10px 0;
    }
</style>  
  <form method="post" id="STAB_OPTION" class="welcome-panel">
    <h2>Scroll Top and Bottom Option Page</h2>

    <h3>Choose Icon</h3>

  <?php
  $icondr="scroll-top-and-bottom/icon/";
  ?>
  	
      <table class="icon_choose" width="350" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td> 
            <input type="radio" id="STAB_icon_Select_1" name="STAB_icon_Select" value="1" <?php if($wp_STAB_icon_Select == 1) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_1">
    			     <?php echo '<img src="' .plugins_url( ''.$icondr.'1_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'1_d.ico' , dirname(__FILE__) ). '" > '; ?>
    			  </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_2" name="STAB_icon_Select" value="2" <?php if($wp_STAB_icon_Select == 2) { echo('checked="checked"'); } if($wp_STAB_icon_Select != true) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_2">
    			     <?php echo '<img src="' .plugins_url( ''.$icondr.'2_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'2_d.ico' , dirname(__FILE__) ). '" > '; ?>
    			  </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_3" name="STAB_icon_Select" value="3" <?php if($wp_STAB_icon_Select == 3) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_3">
    			     <?php echo '<img src="' .plugins_url( ''.$icondr.'3_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'3_d.ico' , dirname(__FILE__) ). '" > '; ?>
    			  </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_4" name="STAB_icon_Select" value="4" <?php if($wp_STAB_icon_Select == 4) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_4">
    			     <?php echo '<img src="' .plugins_url( ''.$icondr.'4_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'4_d.ico' , dirname(__FILE__) ). '" > '; ?>
    			  </label>
          </td>

          <td>
            <input type="radio" id="STAB_icon_Select_5" name="STAB_icon_Select" value="5" <?php if($wp_STAB_icon_Select == 5) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_5">
    			     <?php echo '<img src="' .plugins_url( ''.$icondr.'5_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'5_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			    </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_6" name="STAB_icon_Select" value="6" <?php if($wp_STAB_icon_Select == 6) { echo('checked="checked"'); }  ?> />
            <label for="STAB_icon_Select_6">
  			       <?php echo '<img src="' .plugins_url( ''.$icondr.'6_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'6_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			    </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_7" name="STAB_icon_Select" value="7" <?php if($wp_STAB_icon_Select == 7) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_7">
  			       <?php echo '<img src="' .plugins_url( ''.$icondr.'7_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'7_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			    </label>
            <br/>
            <input type="radio" id="STAB_icon_Select_8" name="STAB_icon_Select" value="8" <?php if($wp_STAB_icon_Select == 8) { echo('checked="checked"'); } ?> />
            <label for="STAB_icon_Select_8">
  			       <?php echo '<img src="' .plugins_url( ''.$icondr.'8_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'8_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			    </label>
          </td>

          <td>
              <input type="radio" id="STAB_icon_Select_9" name="STAB_icon_Select" value="9" <?php if($wp_STAB_icon_Select == 9) { echo('checked="checked"'); } ?> />
              <label for="STAB_icon_Select_9">
  			         <?php echo '<img src="' .plugins_url( ''.$icondr.'9_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'9_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			      </label>
              <br/>
              <input type="radio" id="STAB_icon_Select_10" name="STAB_icon_Select" value="10" <?php if($wp_STAB_icon_Select == 10) { echo('checked="checked"'); }  ?> />
              <label for="STAB_icon_Select_10">
  			         <?php echo '<img src="' .plugins_url( ''.$icondr.'10_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'10_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			       </label>
               <br/>
              <input type="radio" id="STAB_icon_Select_11" name="STAB_icon_Select" value="11" <?php if($wp_STAB_icon_Select == 11) { echo('checked="checked"'); } ?> />
              <label for="STAB_icon_Select_11">
  			         <?php echo '<img src="' .plugins_url( ''.$icondr.'11_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'11_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			       </label>
              <br/>
              <input type="radio" id="STAB_icon_Select_12" name="STAB_icon_Select" value="12" <?php if($wp_STAB_icon_Select == 12) { echo('checked="checked"'); } ?> />
              <label for="STAB_icon_Select_12">
  			         <?php echo '<img src="' .plugins_url( ''.$icondr.'12_u.ico' , dirname(__FILE__) ). '" > '; echo '<img src="' .plugins_url( ''.$icondr.'12_d.ico' , dirname(__FILE__) ). '" > '; ?>
  			      </label>
          </td>
        </tr>
      </table>

      <br>
      <input type="radio" id="STAB_icon_Select_13" name="STAB_icon_Select" value="13" <?php if($wp_STAB_icon_Select == 13) { echo('checked="checked"'); } ?> />
      <label for="STAB_icon_Select_13"> Or Custom Buttons</label>

      <table>
      <tr>
        <td width="150"><span class="field_name">Up Button Location</span></td>
        <td>
        <input type="text"  name="stab_up_btn" value="<?php echo "$stab_up_btn"; ?>" size="40" />
        <input type="button" class="stab-upload-button button button-primary" value="Upload Button" />
        <br /><span>Enter the Up Button location or upload a button image from your computer.</span>
        </td>
      </tr>

      <tr>
        <td width="150"><span class="field_name"> </span></td>
        <td>
       
       <br>
        </td>
      </tr>

      <tr>
        <td width="150"><span class="field_name">Down Button Location</span></td>
        <td>
        <input type="text"  name="stab_down_btn"  value="<?php echo "$stab_down_btn"; ?>" size="40" />
        <input type="button" class="stab-upload-button button button-primary" value="Upload Button" />
        <br /><span>Enter the Down Button location or upload a button image from your computer.</span>
        </td>
      </tr>
      
    </table>



              <label for="STAB_scroll_speed"><h3>Scroll Speed</h3></label>
              <input type="text" name="STAB_scroll_speed" id="STAB_scroll_speed" value="<?php if($wp_STAB_scroll_speed=="") echo "1000"; else echo "$wp_STAB_scroll_speed";?>" > Note: 1000=1s and this field must be a number.

              <h3>jQuery Enable – Disable</h3>
              <h4>
                <?php $wp_STAB_jquery = get_option('STAB_jquery'); ?>
                <input name="STAB_jquery" type="radio" id="STAB_jquery_yes" value="yes" <?php if($wp_STAB_jquery != "no") { echo('checked="checked"'); } ?> /><label for="STAB_jquery_yes"> jQuery Enabled</label>
                <br>
                <input name="STAB_jquery" type="radio" id="STAB_jquery_no" value="no" <?php if($wp_STAB_jquery == "no") { echo('checked="checked"'); } ?> /><label for="STAB_jquery_no"> jQuery Disabled</label>
              </h4>
              <span>If your site already use jQuery from before, it may not work. In that case, Disable jQuery here and it may work! </span>
              <div style="float:right; color:#09F; text-transform: capitalize;">
                  <strong>If you love this plugin, <a href="http://wordpress.org/extend/plugins/scroll-top-and-bottom/" target="_blank">Please Rate as five star.</a></strong> <br>
                  <br>
                  <a href="http://shariarbd.com/documentation-page-scroll-top-and-bottom-wordpress-plugin-version-2-7" target="_blank"> Documentation Page of Scroll top and bottom wordPress plugin version 2.7</a>
              </div>

          <div style="overflow:hidden; margin-top:20px; margin-bottom:20px;">
            <button type="submit" name="STAB_UPDATE"  class="button button-primary">Update Now</button> 
          </div>
    </form><!-- /#STAB_OPTION -->
		
		<?php
		echo "</div>";
 }


function scroll_tandbhead(){
  $wp_STAB_jquery = get_option('STAB_jquery');
  if($wp_STAB_jquery=="no")
    { 
    echo '<link rel="stylesheet" type="text/css" href="'.plugins_url( 'scroll-top-and-bottom/css/style.css' , dirname(__FILE__) ). '" />'; 
    }
  else{
    echo '<script type="text/javascript" src="' .plugins_url( 'scroll-top-and-bottom/js/jquery-2.1.0.min.js' , dirname(__FILE__) ). '" ></script>';
    echo '<link rel="stylesheet" type="text/css" href="'.plugins_url( 'scroll-top-and-bottom/css/style.css' , dirname(__FILE__) ). '" />'; 
    }
}
add_action('wp_head', 'scroll_tandbhead');


function scroll_tandb(){
  include('tandb.php');
}
add_action('wp_footer', 'scroll_tandb');
?>