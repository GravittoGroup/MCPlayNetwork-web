<?php
const debug = 0;

if (debug) {
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
}

require_once 'config/config.php'; // Setting file -> future change DB
// require_once 'functions/function.php'; // basic Function file
