<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// remove access page lost password
add_action( 'login_init', 'otfmh_disable_lost_password' );
function otfmh_disable_lost_password() {
    if ( isset( $_GET['action'] ) ) {
        if ( in_array( $_GET['action'], array( 'lostpassword', 'retrievepassword' ) ) ) {
            wp_redirect( wp_login_url(), 301 );
            exit;
        }
    }
}

// add css on login page
add_action( 'login_enqueue_scripts', 'otfmh_login_page_resource' );
function otfmh_login_page_resource() {
    wp_deregister_script( 'password-strength-meter' );

    wp_dequeue_style( 'login' );

    wp_enqueue_style( 'otfm_login_page_css', get_stylesheet_directory_uri() . '/assets/css/login-page.css' );
}

// remove title seo
add_filter( 'login_title', 'otfmh_remove_title_wp' );
function otfmh_remove_title_wp() {
    return __( 'Log In &lsaquo;', 'otfm-headless' ) . ' ' . get_bloginfo( 'name', 'display' );
}

// disable Powered by WordPress - on login form
add_filter( 'login_headertext', '__return_false' );

// disable link (Powered by WordPress) - on login form
add_filter( 'login_headerurl', '__return_false' );

// close register
add_filter( 'allow_password_reset', '__return_false' );

// disable link on password_reset
add_filter( 'lostpassword_url', '__return_false' );

add_filter( 'gettext', 'otfmh_remove_lostpassword_text' );
function otfmh_remove_lostpassword_text( $text ) {
    if ( ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php' ) ) )
        return $text;

    if ( $text == 'Lost your password?' ) {
        return '';
    }
    return $text;
}

add_filter( 'gettext_with_context', 'otfmh_custom_login_text' );
function otfmh_custom_login_text( $text ) {
    if ( ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php' ) ) )
        return $text;

    if ( $text == '&larr; Back to %s' ) {
        return '';
    }
    return $text;
}

// disable RSS Feed
add_action( 'do_feed', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_rdf', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_rss', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_rss2', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_atom', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_rss2_comments', 'otfmh_disable_feed', 1 );
add_action( 'do_feed_atom_comments', 'otfmh_disable_feed', 1 );
function otfmh_disable_feed() {
    wp_die( __( 'Access denied', 'otfm-headless' ) );
}
