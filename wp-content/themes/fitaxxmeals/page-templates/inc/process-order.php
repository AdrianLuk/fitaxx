<?php
require_once 'class-oauth-request.php';
$consumer_key = 'ck_a7e785c20bcf5b5168d1558953e644f084fdc593';
$consumer_secret = 'cs_1e8196eefd9b35f79e5e46a6fb7e96b6e303d691';
$env = get_home_url() . '/wp-json/gf/v2';
$submit_url = $env . '/forms/' . '1' . '/entries';
// $url = $env . '1' . '/entries';
$oauth = new OAuth_Request(
    $submit_url,
    $consumer_key,
    $consumer_secret,
    'POST',
    array()
);
$full_url = $oauth->get_url();
// var_dump($_POST);
// var_dump($full_url);
//Send request
$_POST['16'] = stripslashes($_POST['16']);
foreach ($_POST as $field) {
    $field = filter_var($field, FILTER_SANITIZE_STRING);
}
$response = wp_remote_request($full_url, array(
    'method' => 'POST',
    'body' => json_encode($_POST),
    'headers' => array('Content-Type' => 'application/json')
));
unset($submit_url);
unset($full_url);
// Check the response code.
if (
    wp_remote_retrieve_response_code($response) !== 201 ||
    empty(wp_remote_retrieve_body($response))
) {
    // If not a 200, HTTP request failed.
    header("Location: " . get_home_url() . "/thank-you?submit=failed");
} else {
    header(
        "Location: " . get_home_url() . "/thank-you?submit=success"
    );
    $entry = json_decode(wp_remote_retrieve_body($response));
    $entry_id = json_decode(wp_remote_retrieve_body($response))->id;
    $submit_url = $env . '/entries/' . $entry_id . '/notifications';
    $oauth = new OAuth_Request(
        $submit_url,
        $consumer_key,
        $consumer_secret,
        'POST',
        array()
    );
    $full_url = $oauth->get_url();
    // var_dump($entry_id);
    // var_dump($entry);
    $notification_response = wp_remote_request($full_url, array(
        'method' => 'POST',
        // 'body' => json_encode($_POST),
        'headers' => array('Content-Type' => 'application/json')
    ));
}
