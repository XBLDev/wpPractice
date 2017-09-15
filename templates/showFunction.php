<?php

function myCustomFunction(){
	       //global $wpdb;
	       //INSERT INTO `xlcwpcom_ss_dbname2a2`.`Bank` (`accountName`, `Owner`, `accountID`, `accountBalance`) VALUES ('account5', 'Li', '555', '5000');
	       //$wpdb->insert('Bank', array('accountName' => "account5", 'Owner' => "li", 'accountID' => '1010', 'accountBalance' => '1111') ); 
	       //$result = $wpdb->get_results("INSERT INTO `xlcwpcom_ss_dbname2a2`.`Bank` (`accountName`, `Owner`, `accountID`, `accountBalance`) VALUES ('account6', 'Ana', '666', '6000')");
    		//echo 'I just ran a php function';
		exit('I just ran myCustomFunction from showFunction!');
}

function myCustomFunction2(){
	       //global $wpdb;
	       //INSERT INTO `xlcwpcom_ss_dbname2a2`.`Bank` (`accountName`, `Owner`, `accountID`, `accountBalance`) VALUES ('account5', 'Li', '555', '5000');
	       //$wpdb->insert('Bank', array('accountName' => "account5", 'Owner' => "li", 'accountID' => '1010', 'accountBalance' => '1111') ); 
	       //$result = $wpdb->get_results("INSERT INTO `xlcwpcom_ss_dbname2a2`.`Bank` (`accountName`, `Owner`, `accountID`, `accountBalance`) VALUES ('account6', 'Ana', '666', '6000')");
    		//echo 'I just ran a php function';
		exit('I just ran myCustomFunction2 from showFunction!');
}


function myAjax() {
    exit('Ajax function!');

     // $.ajax({
   //        type: "POST",
   //        url: 'show.php',
  //         data:{action:'call_this'},
    //       success:function(html) {
  //           alert(html);
   //        }

    //  });
    
 }


?>