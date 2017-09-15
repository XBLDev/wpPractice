<?php
/* Template Name: TempAndPage */


?>

<?php get_header(); ?>





<div class="wrap">
    <div id="primary" class="content-area">
    	
    	<p>
	<?php the_post(); the_content(); ?>
	</p>
	
	<p>
	BEGIN OF TEMPLATE CONTENT
	</p>
	
	<p>	
	This Page uses "TempAndPage" template to include both the template
	and page content, or at least that is what how it is supposed to work.
	If it works, it should appear above/below the page content.
	</p>
	
	<p>
	Idea is from: https://stackoverflow.com/questions/30635644/have-post-does-return-null-value-in-wp
	</p>
	
	<p>
	END OF TEMPLATE CONTENT
	</p>	
	
	
    </div>	
</div>

<?php get_footer(); ?>
