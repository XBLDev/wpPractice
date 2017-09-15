<?php
   /*
   Plugin Name: Awesomeness Creator
   Plugin URI: http://my-awesomeness-emporium.com
   Description: a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
   */
   
   

add_action("wp_ajax_my_user_vote", "my_user_vote");
add_action("wp_ajax_nopriv_my_user_vote", "my_must_login");
add_action( 'init', 'my_script_enqueuer' );

function my_script_enqueuer() {
   wp_register_script( "my_voter_script", WP_PLUGIN_URL.'my_voter_script.js', array('jquery') );
   wp_localize_script( 'my_voter_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'my_voter_script' );

}




function my_user_vote() {

   if ( !wp_verify_nonce( $_REQUEST['nonce'], "my_user_vote_nonce")) {
      exit("No naughty business please");
   }   

   $vote_count = get_post_meta($_REQUEST["post_id"], "votes", true);
   $vote_count = ($vote_count == '') ? 0 : $vote_count;
   $new_vote_count = $vote_count + 1;

   $vote = update_post_meta($_REQUEST["post_id"], "votes", $new_vote_count);

   if($vote === false) {
      $result['type'] = "error";
      $result['vote_count'] = $vote_count;
   }
   else {
      $result['type'] = "success";
      $result['vote_count'] = $new_vote_count;
   }

   if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      //$result = json_encode($result);
      echo $result.vote_count;
      //wp_redirect( get_permalink( $_REQUEST['post_id'] ) );
      
   }
   else {
      //header("Location: ".$_SERVER["HTTP_REFERER"]);
      //$result = json_encode($result);
      echo $result.vote_count;     
     //wp_redirect( get_permalink( $_REQUEST['post_id'] ) );
       
   }

   die();

}

function my_must_login() {
   echo "You must log in to vote";
   die();
}
   
   
   
?>



