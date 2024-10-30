<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
Plugin Name: CSS Url Argument
Plugin URI: https://profiles.wordpress.org/cema
Description: Adds custom css file to header if specific url argument is present.
Author: cema
Version: 1.1
Pluigin URI: https://wordpress.org/plugins/css_url_argument
*/

//*SCRIPT INFO
//
// Created: 04-09-2018 (D,M,Y)
// Updated: 07-09-2018 (D,M,Y)
//
//*SCRIPT INFO

//*Shortcode
function cssusp_shortcode () {
	//echo "[CSS_Url_Argument]"; Debug Funcionality!
	echo '<script type="text/javascript" id="cssusp" data-cssusp_var="'. plugin_dir_url( __FILE__ ) .'" src="scripts/cssusp_function.js"></script>';
}
add_shortcode( 'CSS_UP', 'cssusp_shortcode');

//*Menu
add_action('admin_menu','cssusp_admin_otions');
function cssusp_admin_otions () {
	add_menu_page ('CSS Url Argument', 'CSS Url Argument', 'manage_options', 'cssusp', 'cssusp_admin', 'dashicons-paperclip', '65');
	add_submenu_page ('cssusp','How To', 'How To', 'manage_options', 'cssusp_sub_page', 'cssusp_how_to_admin');
}
//*Filter Hook(s)
add_filter( 'script_loader_tag', 'cssusp_script_loader_tag', 10 ,2 );
function cssusp_script_loader_tag( $tag, $handle ){
    if ( $handle == 'cssusp_function.js' ) {
        return str_replace( '<script', '<script id="cssusp" data-cssusp_var="'. plugin_dir_url( __FILE__ ) .'"', $tag );
    }
    return $tag;    
}

//*Plugin CSS and Script
function cssusp_enqueues() {
	wp_enqueue_style( 'CSSUSP', plugin_dir_url( __FILE__ ) . 'scripts/css/style.css', false ); 
	wp_register_script('cssusp_function.js', plugin_dir_url( __FILE__ ) .'scripts/cssusp_function.js');
    wp_enqueue_script('cssusp_function.js');
}
add_action( 'wp_enqueue_scripts', 'cssusp_enqueues' );

//*Page1
function cssusp_admin()
{
?>
<style>
.boxed {
  background-color: #E8E8EE;
  border: 1px solid #838383;
  padding: 25px;
  margin-top: 45px;
  margin-bottom: 20px;
}
.boxed2 {
  border: 1px solid #838383;
  padding: 5px;
}
</style>
	
	<div class="wrap">
		<p> <!-- spacer line --> </p>
		<div class="boxed">
		<h1>CSS Url Argument</h1>
		<p> <!-- spacer line --> <br> </p>
		<h3>What does this do?</h3>
		<h4>This Plugin adds the option to use custom css from a url parameter. It also enables you to add css code which is always present. (though this feature is still in development for easy access in the dashboard!)</h4>
		<p> <!-- spacer line --> </p>
		<h3>How To's:</h3>
		<h4>These explanations can be found on the 'How to' sub page.</h4>
		<p> <!-- spacer line --> <br><br><br> </p>
		<h3>Copyright</h3>
		<p>Made by Hannah from Cema-Media.</p>
		</div>
	</div>	
<?php
}

//*Page2
function cssusp_how_to_admin()
{
?>
<style>
.boxed {
  background-color: #E8E8EE;
  border: 1px solid #838383;
  padding: 25px;
  margin-top: 45px;
  margin-bottom: 20px;
}
.boxed2 {
  border: 1px solid #838383;
  padding: 5px;
}
</style>
	
	<div class="wrap">
		<div class="boxed">
		<h3>How To's:</h3>
		<h4>Explanation - how to use?</h4>
		<p> <!-- spacer line --> </p>
		<div class="boxed2">
		<h4>Url Parameters to Css</h4>
		<p>step1. Add custom css file to "{plugin folder}/custom_css/" folder. <br>step2. go to <?php echo '' . home_url( '/' ) . ''; ?>?theme={name of you css file without .css}</p>
		</div>
		<div class="boxed2">
		<h4>ShortCode for manual add in non-header pages.</h4>
		<p>step1. Add [CSS_UP] to any text field. <br>step2. Reload website and try Url parameter setup again.</p>
		</div>
		<div class="boxed2">
		<h4>Always Present CSS file.</h4>
		<p>step1. Edit your css code into the file located at "{plugin folder}/scripts/css/style.css" . <br>step2. Reload your site.</p>
		</div>
		</div>
	</div>	
<?php
}

?>