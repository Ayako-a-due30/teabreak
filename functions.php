<?php 

function mytheme_setup(){
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    //CSSを有効化、エディタに読み込み
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');

    //ページのタイトルを有効化
    add_theme_support('title-tag');

    //link,style,scriptのHTML5対応を有効化
    add_theme_support('html5',array(
        'style',
        'script'
    ));
}
    add_action('after_setup_theme','mytheme_setup');

function mytheme_enqueue() {

    //google Fontsを読み込み
    wp_enqueue_style(
        'myfonts',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,700&family=Noto+Sans+JP&display=swap',
        array(),
        null
    );
    //Dashiconを読み込み
    wp_enqueue_style(
        'dashicons'
    );
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path('style.css'))
    );
}
add_action('wp_enqueue_scripts','mytheme_enqueue');

