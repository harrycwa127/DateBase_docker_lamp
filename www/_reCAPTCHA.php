<?php
function check() {
    // Google reCAPTCHA secret
    $data['secret'] = '6LeHnAwjAAAAAGMeJUzaQj5H3vaFPiXEXuLBQjg6';
    $data['response'] = $_POST['g-recaptcha-response'];
    $ch = curl_init();
    // CURL
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $result = curl_exec($ch);
    curl_close($ch);
    // decode
    $result = json_decode($result, true);

    // check success
    if ( ! isset($result['success']) || ! $result['success']) {
        // Not success
        return false;
    } else {
        // success
        return true;
    }
}
?>