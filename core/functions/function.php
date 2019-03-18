<?php
$_POST

/* Json decode function */
function JsonDecode($RequestURL) {
    $obj = json_decode($RequestURL);

    return $obj;
}
