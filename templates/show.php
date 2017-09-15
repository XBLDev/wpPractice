<?php
/* Template Name: Display Data */
 ?>
<?php get_header(); ?>

<style type=”text/css”>
table {
margin: 8px;
color: #ffff00;
}

</style>


<div class="wrap">
    <div id="primary" class="content-area">






<table border="1">
    <p>WordPress practice 12/09/2017: getting data from DB</p>
    <p>Youtube tutorial video: https://www.youtube.com/watch?v=ZNmMA2wDdEI&t=401s</p>	
    <tr>
     <th><center>accountName</center></th>
     <th><center>Owner</center></th>
     <th><center>accountID</center></th>
     <th><center>accountBalance</center></th>
    </tr>

      <?php
      
	//$start = "<script>console.log( 'start' );</script>";
	
	//echo $start;
	
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM Bank");
        foreach ( $result as $print )  { ?>
          <tr>
                  <td> <center> <?php echo $print->accountName; ?> </center></td>
                  <td> <center> <?php echo $print->Owner; ?> </center></td>
                  <td> <center> <?php echo $print->accountID; ?> </center></td>
                  <td> <center> <?php echo $print->accountBalance; ?> </center></td>
          </tr>
            <?php }

     ?>
     

     

     

</table>
	

				
<form id="insertform" action="" method="post">
Name:  <input id="accName" style="height: 30px;" name="accountName" type="text" />
Owner: <input id="accOwner" style="height: 30px;" name="accountOwner" type="text" />
ID: <input id="accID" style="height: 30px;" name="accountID" type="text" />
Balance: <input id="accBalance" style="height: 30px;" name="accountBalance" type="text" /></br>

<button id="InsertNewAccount" type="submit">SUBMIT </button>
</form>				
				
				
				
	
	
	




</div>
</div>





<?php get_footer(); ?>
