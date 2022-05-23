<?php get_header(); ?>
    <main class="bg-light">
        <!-- メインコンテンツ -->
        <div class="container pt-5 mt-5">
            <div class="row pt-5 mt-5">
                <div class="col-md-10 col-10 mx-auto">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="bg-white py-5 mb-5 text-center">
                            <!-- 記事タイトル -->
                            <h1 class="h2 px-3 pb-3 font-weight-bolder">
                                <?php the_title(); ?>
                            </h1>
                            <!-- カテゴリー -->
                            <p><?php the_category( ' ' ); ?></p>
                            <!-- サムネイル -->
                            <div class="pb-3">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('', array( 'class' => 'img-fluid')); ?>
                                <?php else: ?>
                                　<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <!-- 本文 -->
                            <div class="text-left p-2"><?php the_content(); ?></div>
                        </div>
                    <?php endwhile; else: ?>
                        <p>記事がありません</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>