<?php
/**
 * Plugin Name: DBInsertPlugin
 * Plugin URI: https://www.inkthemes.com/how-to-use-ajax-in-wordpress-for-data-insertion/
 * Description: tutorial ajax plugin
 * Version: 1.0
 * Author: InkThemes
 * Author URI: http://www.inkthemes.com
 * License: Plugin comes under GPL Licence.
 */


add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_scripts() {

	//if( is_single() ) {
	//	wp_enqueue_style( 'inkstyle', plugins_url( 'insertrecord.css', __FILE__ ) );
	//}




//Include Javascript library
wp_enqueue_script('inkthemes', plugins_url( 'dbinsertDemo.js' , __FILE__ ) , array( 'jquery' ));
// including ajax script in the plugin Myajax.ajaxurl
wp_localize_script( 'inkthemes', 'inthemesMyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php')));
}



function post_word_count(){
global $wpdb;
//$post = array_map('stripslashes_deep', $_POST);

//$newid =$post['newid'];

//newname = $post['newname'];

//$newsig = $post['newsig'];


//$newid = stripslashes($_POST['newid']);

//$newname = stripslashes($_POST['newname']);

//$newsig = stripslashes($_POST['newsig']);


//SELECT id FROM work_carousels ORDER BY id DESC LIMIT 1;

//$lastAddedId = ($wpdb->get_results('SELECT MAX(id) FROM work_carousels'));

//SELECT * FROM `testTableThreeColumns` ORDER BY `id` ASC
//$result = $wpdb->get_results("SELECT * FROM Bank");

//SELECT * FROM `testTableThreeColumns` ORDER BY `id` ASC

//$result = $wpdb->get_results("SELECT * FROM testTableThreeColumns");
//SELECT max(cast(meta_value as unsigned)) FROM wp_postmeta WHERE meta_key='price'
//$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
//echo "<p>User count is {$user_count}</p>";



$lastAddedId = $wpdb->get_var("SELECT max(cast(id as unsigned)) FROM testTableThreeColumns");



//$love = ( empty( $love ) ) ? 0 : $love;


$lastAddedId = $lastAddedId + 1;


//echo '<p class="paragraph'.$lastAddedId.'"></p>';
//$lastAddedId = $lastAddedId + 1;

$sign = $_POST['named'];





$wpdb->insert( 
	'testTableThreeColumns', 
	array( 
		'id'   => $lastAddedId,	
		'name' => $sign,
		'sign' => $sign
		
	)
	, 
	array(
		'%s','%s','%s'
	) 
);



die();
return true;


}





// add_filter( 'the_content', 'post_love_display', 99 );
// function post_love_display( $content ) {
// 	$love_text = '';

// 	if ( is_single() ) {
		
// 		$love = get_post_meta( get_the_ID(), 'post_love', true );
// 		$love = ( empty( $love ) ) ? 0 : $love;

// 		$love_text = '<p class="love-received"><a class="love-button" href="' . admin_url( 'admin-ajax.php?action=post_love_add_love&post_id=' . get_the_ID() ) . '" data-id="' . get_the_ID() . '">give love</a><span id="love-count">' . $love . '</span></p>'; 
	
// 	}

// 	return $content . $love_text;

// }




function show_form2($content)
{

$form = '';
if ( is_single() ) {
	$form = '
	<form method="post">
	

	

	
	<label>Sign</label>
	<input type="text" id="named" name="named" value=""/><br/>
		
	<input type="button" id="submit" name="submit" value="Submit"/>
	</form>';

}

return $content . $form;
}






//add_filter('the_content', 'show_bankData', 98);

add_action('wp_ajax_post_word_count', 'post_word_count');
add_action('wp_ajax_nopriv_post_word_count', 'post_word_count');

add_filter('the_content', 'show_form2', 98);







?>
