jQuery(document).ready(function(){
jQuery("#submit").click(function(){





var named = jQuery("#named").val();





jQuery.ajax({
type: 'POST',
url: inthemesMyAjax.ajaxurl,
data: {
"action": "post_word_count", 
"named": named

},
success: function(data){


alert(data);
}


});
});
});