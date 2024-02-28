<?php
// config.php

$is_local_environment = true; // Set this to false for the live environment

if ($is_local_environment) {
    define('BASE_PATH', 'C:/xampp/htdocs/alexklausing');
    define('BASE_URL', 'http://localhost/alexklausing/');
} else {
    define('BASE_PATH', '/home/alexdprq/public_html');
    define('BASE_URL', 'https://alexklausing.com/');
}

$base_path = BASE_PATH;
$base_url = BASE_URL;
