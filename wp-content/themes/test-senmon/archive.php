<?php get_header(); ?>

<div class="other pt-5 mt-5">
	<h1 class="pt-2"  itemprop="name headline">
		<?php single_cat_title( ); ?>
	</h1>
	<div style="clear:both"></div>

	<div class="col-md-6 col-6 mx-auto">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="bg-white py-5 mb-5 text-center">
            <!-- 記事タイトル -->
            <h2 class="h2 px-3 pb-3 font-weight-bolder">
                <a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php the_title(); ?></a>
            </h2>
            <!-- サムネイル -->
            <div class="pb-3">
                <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('', array( 'class' => 'img-fluid ')); ?>
                <?php else: ?>
                　<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" class="img-fluid">
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; else: ?>
        <p>記事がありません</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>