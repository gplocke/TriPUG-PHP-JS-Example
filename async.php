<?php

$formats = array(
            'json',
            'xml',
            'text',
            'html'
           );

$format = 'json'; // default to use json if not specified

if (isset($_GET['format']) && in_array($_GET['format'], $formats)) {
    $format = $_GET['format'];
}

