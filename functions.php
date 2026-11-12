<?php
/**
 * Vaato No Vepar theme setup.
 */
if (!defined('ABSPATH')) exit;

define('VAATO_VER', '1.0.0');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', ['height' => 60, 'width' => 220, 'flex-width' => true, 'flex-height' => true]);
    register_nav_menus(['primary' => 'Primary menu']);
});

/* Styles and scripts: fonts, main.css, main.js */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('vaato-fonts', 'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,800&family=Noto+Sans+Gujarati:wght@400;600;800&display=swap', [], null);
    wp_enqueue_style('vaato-main', get_template_directory_uri() . '/assets/css/main.css', ['vaato-fonts'], VAATO_VER);
    wp_enqueue_script('vaato-main', get_template_directory_uri() . '/assets/js/main.js', [], VAATO_VER, true);
    // Host photos for the podcast section (put the files in assets/img/)
    wp_localize_script('vaato-main', 'vaatoImg', [
        'mic' => get_template_directory_uri() . '/assets/img/host-mic.webp',
        'std' => get_template_directory_uri() . '/assets/img/host-std.webp',
    ]);
});

/* Content types for the sections in the design */
add_action('init', function () {
    $types = [
        'podcast'  => ['Podcasts', 'Podcast', 'microphone-alt'],
        'vlog'     => ['Vlogs', 'Vlog', 'video-alt3'],
        'reel'     => ['Reels', 'Reel', 'smartphone'],
        'event'    => ['Events', 'Event', 'calendar-alt'],
        'magazine' => ['Magazines', 'Magazine', 'book'],
        'show'     => ['News Shows', 'News Show', 'megaphone'],
    ];
    foreach ($types as $slug => $t) {
        register_post_type($slug, [
            'labels'       => ['name' => $t[0], 'singular_name' => $t[1], 'add_new_item' => 'Add ' . $t[1]],
            'public'       => true,
            'has_archive'  => true,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-' . $t[2],
            'supports'     => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
            'rewrite'      => ['slug' => $slug],
        ]);
    }
});

/* Meta box for posts: 60-word summary and Gujarati headline */
add_action('add_meta_boxes', function () {
    add_meta_box('vaato_meta', 'Vaato details', function ($post) {
        wp_nonce_field('vaato_meta', 'vaato_meta_nonce');
        $sum = get_post_meta($post->ID, 'summary_60', true);
        $gu  = get_post_meta($post->ID, 'title_gu', true);
        echo '<p><label><b>Gujarati headline</b></label><br><input type="text" name="title_gu" value="' . esc_attr($gu) . '" style="width:100%"></p>';
        echo '<p><label><b>Read in 60 words (summary)</b></label><br><textarea name="summary_60" rows="5" style="width:100%">' . esc_textarea($sum) . '</textarea></p>';
    }, 'post', 'normal', 'high');
});
add_action('save_post', function ($id) {
    if (!isset($_POST['vaato_meta_nonce']) || !wp_verify_nonce($_POST['vaato_meta_nonce'], 'vaato_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $id)) return;
    update_post_meta($id, 'summary_60', sanitize_textarea_field($_POST['summary_60'] ?? ''));
    update_post_meta($id, 'title_gu', sanitize_text_field($_POST['title_gu'] ?? ''));
});

/* Create the 11 design categories if missing (runs once on theme activation) */
add_action('after_switch_theme', function () {
    $cats = ['Business', 'Markets', 'Gujarat', 'India', 'World', 'Startups', 'Economy', 'Banking', 'Real Estate', 'Commodities', 'Personal Finance'];
    foreach ($cats as $c) {
        if (!term_exists($c, 'category')) wp_insert_term($c, 'category');
    }
});
