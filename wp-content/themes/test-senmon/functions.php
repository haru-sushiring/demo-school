<?php

//　ヘッダー、フッターのカスタムメニュー化
register_nav_menus (
    array(
        'global_nav' => 'グローバル',
        'pc_header' => 'pc_ヘッダー',
        'sp_header' => 'sp_ヘッダー',
        'disappear_footer_left' => '消えるフッター左側',
        'disappear_footer_right' => '消える_フッター右側',
        'footer_link' => 'フッター_link',
    )
);

//アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );