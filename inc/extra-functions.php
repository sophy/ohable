<?php

/**
 * Redirect to 410 Gone
 *
 * header("HTTP/1.1 410 Gone");
 */

function ohable_redirect_gone()
{
    global $wp;
    $current_url = home_url(add_query_arg(array($_GET), $wp->request));

    if (strstr($current_url, ".html")) {
        header("HTTP/1.1 410 Gone");
        exit();
    }
    // Nothing todo just return.
    return;
}
