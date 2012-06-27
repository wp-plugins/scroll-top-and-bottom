<?php
/*
Plugin Name: Scroll Top and Bottom
Plugin URI: http://shariarbd.com/plugins/scroll-top-and-bottom/
Description: Scroll Top and Bottom is created to scroll to top and bottom of the site. User can go to top and bottom of the site using this tool easily. Now, 12 different icon has been added and you can choose them from settings. This plugin is created with jQuery and Demo is here at http://shariarbd.com/. Plugin is created by <cite><a href="http://shariarbd.com/" title="Md. Sahriar">Md. Shariar</a>.</cite>
Version: 2.0
Author: Md. Shariar
Author URI: http://shariarbd.com/ 
*/


// Admin Portion
 function STAB_OPTION()
{
    if($_POST['STAB_UPDATE']){
		update_option('STAB_icon_Select',$_POST['STAB_icon_Select']);
		/*update_option('STAB_jQuery_deactive',$_POST['STAB_jQuery_deactive']);*/
		update_option('STAB_jquery',$_POST['STAB_jquery']);
        echo '<h3 syle="color:%138604;">Plugin has been updated.</h3>';
	}
	$wp_STAB_icon_Select = get_option('STAB_icon_Select');
	$wp_STAB_jQuery_deactive = get_option('STAB_jQuery_deactive');
	?>

<div class="wrap">
  <form method="post" id="STAB_OPTION">
  <h2>Scroll Top and Bottom Option Page</h2>
    <fieldset class="options">
      <table class="form-table">
        <tr valign="top">
          <td><h2>Choose Icon</h2>

<?php
$icondr="scroll-top-and-bottom/icon/";
?>
	<style type="text/css">
	.icon_choose input{
		margin-bottom:10px}
    </style>	 
             <table class="icon_choose" width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> <input type="radio" id="STAB_icon_Select_1" name="STAB_icon_Select" value="1" <?php if($wp_STAB_icon_Select == 1) { echo('checked="checked"'); } ?> />
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
			  </label></td>
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

            <h2>jQuery Enable – Disable</h2><h3>
            <?php $wp_STAB_jquery = get_option('STAB_jquery'); ?>
            <input name="STAB_jquery" type="radio" id="STAB_jquery_yes" value="yes" <?php if($wp_STAB_jquery != "no") { echo('checked="checked"'); } ?> /><label for="STAB_jquery_yes"> jQuery Enabled</label>
            <br>
            <input name="STAB_jquery" type="radio" id="STAB_jquery_no" value="no" <?php if($wp_STAB_jquery == "no") { echo('checked="checked"'); } ?> /><label for="STAB_jquery_no"> jQuery Disabled</label>
            </h3>
            <span style="color:green; font-size:14px; text-transform:uppercase;">If your site already use jQuery from before, it may not work. In that case, Disable jQuery here and it may work! </span>
            <div style="float:right; color:#09F; font-size:14px; text-transform:uppercase;"><strong>If you love this plugin, <a href="http://wordpress.org/extend/plugins/scroll-top-and-bottom/" target="_blank">Please Rate as five star.</a></strong></div>
</div>
            
            </td>
        </tr>
        
          <td><!-- <h3><input type="checkbox" id="STAB_jQuery_deactive" name="STAB_jQuery_deactive" value="STAB_jQuery_deactive" <?php if($wp_STAB_jQuery_deactive == true) { echo('checked="checked"'); } ?> />
			<?php if($wp_STAB_jQuery_deactive == true) { echo("<span style=\"color:green\">: <label for=\"STAB_jQuery_deactive\">!</label></span>"); }
			else
			echo"<span style=\"color:red\">:<label for=\"STAB_jQuery_deactive\"> Deactive jQuery for Scroll Top and Bottom</label></span>"; ?></h3> --></td>
        <tr>
          <td><input type="submit" name="STAB_UPDATE" value="Update" /></td>
        </tr>
      </table>
    </fieldset>
  </form>
  </table>
</div>
<?php
}





function STAB_ADMIN()
{
	if (function_exists('add_options_page')) {
		add_options_page('Scroll Top-Bottom', 'Scroll Top-Bottom', 9, basename(__FILE__),'STAB_OPTION');
	}
}

function STAB_actions( $links, $file ) {
		if( $file == 'scroll-top-and-bottom/stab.php' && function_exists( "admin_url" ) ) {
			$settings_link = '<a href="' . admin_url( 'options-general.php?page=stab.php' ) . '">' .'Settings' . '</a>';
			array_unshift( $links, $settings_link ); // before other links
		}
		return $links;
}


function scroll_tandbhead() 
{
$wp_STAB_jquery = get_option('STAB_jquery');
if($wp_STAB_jquery=="no")
{	
include('cssandjs.php');
}
else{
echo '<script type="text/javascript" src="' .plugins_url( 'scroll-top-and-bottom/jquery.min.js' , dirname(__FILE__) ). '" ></script>';
include('cssandjs.php');
}
}

function scroll_tandb() 
{
include('tandb.php');
}

add_action('admin_menu','STAB_ADMIN',1);
add_filter('plugin_action_links', 'STAB_actions', 10, 2 );
add_action('wp_head', 'scroll_tandbhead');
add_action('wp_footer', 'scroll_tandb');
?>