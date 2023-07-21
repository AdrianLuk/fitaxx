<?php

// Save Admin Page Options Basic
function rcafe_bw_settings_save_func(){
    $updated_value = [];
    if(isset($_POST['data']) && !empty($_POST['data'])) {
      foreach ($_POST['data'] as $option) {
        $updated_value[$option['name']] = $option['value'];
      }
      update_option('rcafe_bw_settings', $updated_value);      
    } else {
      update_option('rcafe_bw_settings', '');    
    }
    die();
}
add_action( 'wp_ajax_rcafe_bw_settings_save', 'rcafe_bw_settings_save_func' );
add_action( 'wp_ajax_nopriv_rcafe_bw_settings_save', 'rcafe_bw_settings_save_func' );

function rctl_bw_toggle_submit_func(){
    update_option('rcafe_bw_toggle', $_POST['data']);
    die();
}
add_action( 'wp_ajax_rctl_bw_toggle_submit', 'rctl_bw_toggle_submit_func' );
add_action( 'wp_ajax_nopriv_rctl_bw_toggle_submit', 'rctl_bw_toggle_submit_func' );

// Save Admin Page Options Unique
function rcafe_uw_settings_save_func(){
    $updated_value = [];
    if(isset($_POST['data']) && !empty($_POST['data'])) {
      foreach ($_POST['data'] as $option) {
        $updated_value[$option['name']] = $option['value'];
      }
      update_option('rcafe_uw_settings', $updated_value);      
    } else {
      update_option('rcafe_uw_settings', '');    
    }
    die();
}
add_action( 'wp_ajax_rcafe_uw_settings_save', 'rcafe_uw_settings_save_func' );
add_action( 'wp_ajax_nopriv_rcafe_uw_settings_save', 'rcafe_uw_settings_save_func' );

function rctl_uw_toggle_submit_func(){
    update_option('rcafe_uw_toggle', $_POST['data']);
    die();
}
add_action( 'wp_ajax_rctl_uw_toggle_submit', 'rctl_uw_toggle_submit_func' );
add_action( 'wp_ajax_nopriv_rctl_uw_toggle_submit', 'rctl_uw_toggle_submit_func' );