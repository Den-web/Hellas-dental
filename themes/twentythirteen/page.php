<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <?php /* The loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
		<div class="bg-top"> </div>
                <div class="entry-content">
		 
                    <nav>
                        <?php wp_nav_menu('menu=LeftMenu'); ?>
			
                        <div id="doctor" class="doctor">
                        <p class="text-2 p2">
                            <a rel="nofollow" href="/asq-question">Спросите</a> у доктора    </p>
                        <p class="text-3 title">
                            Мы всегда и с радостью готовы ответить на все Ваши вопросы.    </p>
                        <div class="wrapper">
                            <a rel="nofollow" class="fright ask-question" href="/asq-question/">Задать вопрос</a>
                        </div>
			<!--div class="fb-like"
 	 			data-share="true"
 	 			data-width="450"
 	 			data-show-faces="true">
			</div-->
                    </div>
                    </nav>
                    
                    <?php the_content(); ?>
			
                    <?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentythirteen') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
                </div><!-- .entry-content -->

                <footer class="entry-meta">
                    <?php edit_post_link(__('Edit', 'twentythirteen'), '<span class="edit-link">', '</span>'); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post -->

            <?php comments_template(); ?>
        <?php endwhile; ?>
	<!--div
  	class="fb-like"
 	 data-share="true"
 	 data-width="450"
 	 data-show-faces="true">
	</div-->
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>