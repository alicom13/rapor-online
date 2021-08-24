<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller_constructor'][] = array(
    'function' => 'ro_ssl',
    'filename' => 'ro-ssl.php',
    'filepath' => 'hooks'
);