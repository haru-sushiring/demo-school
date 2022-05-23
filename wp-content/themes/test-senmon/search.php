<?php get_header(); ?>
<?php $s = htmlentities($_GET['s']); ?>

<div class="other pt-5 mt-5">
	<h1 class="pt-5 mt-5 text-center"  itemprop="name headline">
		<?php if($s){ ?>検索キーワード：<?php echo $s; ?><br><?php } ?>
	</h1>
	<!-- <hr> -->
	<div style="clear:both"></div>

	<?php
	// query_posts( array('s' => $s,));
	?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
	if ( !empty($thumb['0']) ) {
		$url = $thumb['0'];
	} else {
		$url = get_template_directory_uri() . "/images/no-image.png";
	}
	?>

	<div class="col-md-6 col-6 mx-auto">

		<!-- タイトル表示 -->
		<h2 class="title" itemprop="name headline">
			<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php the_title(); ?></a>
		</h2>

		<p class="cat text-center">カテゴリー：<?php the_category( ' ' ); ?></p>

		<!-- サムネイルの表示 -->
		<div itemscope itemtype='http://schema.org/ImageObject' class="thumbnail">
			<a style="background-image:url(<?=$url?>);" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="url" class="thumbnail-img"></a>
		</div>

	</div>

	<?php endwhile; else : ?>
	<!-- ループ開始 -->

	<div class='text-center'>見つかりませんでした</div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>