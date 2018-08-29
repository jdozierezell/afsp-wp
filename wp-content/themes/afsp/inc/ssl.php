<?php

if (stripos(get_option('siteurl'), 'https://') === 0) {
    $_SERVER['HTTPS'] = 'on';
    // add JavaScript detection of page protocol, and pray!
    add_action('wp_print_scripts', 'force_ssl_url_scheme_script');
}
function force_ssl_url_scheme_script() {
?>

<script>
if (document.location.protocol != "https:") {
    document.location = document.URL.replace(/^http:/i, "https:");
}
</script>

<?php } ?>