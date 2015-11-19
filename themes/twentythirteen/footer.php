<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
    
    <div class="main">
       <div class="wrapper">
        
	<div class="box-carousel">
		
		<?php				$id = 422;				$post = get_post($id); 				$content = $post->post_content;				echo $content;			?>
	</div>

   </div>
    <div class="padding-footer">
        <div class="wrapper">
            <div class="col-1 spacing-2">
                <div class="col-2 text-4">&copy; 2011-2015 «Hellas Dental» <br/> <a href="/stomatologicheskaya_klinika_hellas_dental_odessa/">Стоматологическая клиника</a></div>

            </div>
            <div class="col-1 spacing-3">
                <a class="footer-logo" href="/stomatologicheskaya_klinika_hellas_dental_odessa/">HellasDental</a>
            </div>
            <div class="col-2 text-4">
                	г. Одесса, ул. Пушкинская, 38<br/>т.: +38 (048) 734-00-43<br/>E-mail: <u>info@hellasdental.com</u>
            </div>
        </div>
    </div>
</footer>         
        </div>
    </div>
</div><?php wp_footer(); ?>

</body>
</html>