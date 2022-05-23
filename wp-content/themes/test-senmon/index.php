<?php get_header(); ?>
    <main>
        <section class="top">
            <div class="container-fluid top-img">
                <div class="flex">
                    <p>AIと共存するエンジニアになる</p>
                    <h2 class="h4">職業実践専門課程 認定校<br>TEST-IT専門学校</h2>
                </div>
            </div>
        </section>
        <section class="gakka">
            <div class="container">
                <div class="row">
                    <h2>AIに特化した4学科</h2>
                </div>
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'no_found_rows' => true,  //ページャーを使う時はfalseに。
                        );
                        $the_query = new WP_Query( 'category_name=department-introduction' );
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <div class="gakka-item col-12 col-md-6">
                            <div class="card">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail('', array( 'class' => 'bd-placeholder-img card-img-top' )); ?>
                                <?php else: ?>
                                　<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" class="img-fluid">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h3 class="card-title h5"><?php the_title(); ?></h3>
                                    <p class="card-text">Python 機械学習 自然言語処理 統計学などを学習し、AIに特化した人材を目指します</p>
                                    <div class="text-center">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-light">詳しく見る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <p>記事がありません</p>
                        <?php endif; wp_reset_postdata();?>
                </div>
            </div>
        </section>
        <section class="strong">
            <div class="container">
                <div class="row">
                    <h2>TEST-ITの強み</h2>
                    <p class="text-center">TEST-ITで未来を勝ち取れ</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h3><i class="far fa-check-circle"></i> GAFA社員の外部講師</h3>
                        <p>最先端企業の社員さんをお招きした特別講座を月1で行います。</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h3><i class="far fa-check-circle"></i> 国が認めた学校</h3>
                        <p>4つのすべての学科が、質の高い職業教育を行う「職業実践専門課程」として、文部科学大臣に認められています。</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h3><i class="far fa-check-circle"></i> 企業連携授業</h3>
                        <p>企業と連携し、実案件をモデルとしたデモ案件を授業で取り組みます。</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="openchanpass">
            <div class="container">
                <div class="row">
                    <h2>オープンキャンパス・イベント</h2>
                </div>
                <ul id="slider">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if (in_category( 'open-campus' ) ): ?>
                    <li>
                        <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail(''); ?>
                        <?php else: ?>
                        　  <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="" class="img-fluid">
                        <?php endif; ?>
                        <h4><?php the_title(); ?></h4ｈ４>
                    </li>
                        <?php endif; ?>
                    <?php endwhile; else : ?>
                    <?php endif; ?>
                </ul>
            </div>
        </section>
        <section class="sns">
            <h2>SNS</h2>
            <div class="sns-twitter">
                <a class="twitter-timeline" data-lang="ja" data-width="400" data-height="300" href="https://twitter.com/sushiring_haru?ref_src=twsrc%5Etfw">Tweets by sushiring_haru</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="container">
                <div class="row">
                    <ul class="flex">
                        <li class="sns-item -facebook"><a href="" target="_blank" class="js-hover"><i class="fab fa-facebook-square"></i><span>Facebook</span></a></li>
                        <li class="sns-item -line"><a href="" target="_blank" class="js-hover"><i class="fab fa-line"></i><span>LINE</span></a></li>
                        <li class="sns-item -instagram"><a href="#" class="insta_btn"><i class="fab fa-instagram"></i> <span>Instagram</span></a></li>
                        <li class="sns-item -youtube"><a href="" target="_blank" class="js-hover"><i class="fab fa-youtube"></i><span>YouTube</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="siryou" id="siryou">
            <div class="siryou-btn">
                <a href="<?php echo get_permalink( 133 ); ?>">資料請求はこちら <i class="fas fa-chevron-circle-right"></i>　</a>
            </div>
            <p>願書一式同封、送料無料</p>
        </div>
<?php get_footer(); ?>