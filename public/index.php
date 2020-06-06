<?php

ini_set('display_errors', E_ALL);

require_once '../Core/boot.php';

function dump($scope)
{
    echo '<div style="clear: both"></div>';
    echo '<div style="background-color: rgba(0,0,0,0.64); width: 100%; padding-bottom: 50px">';
    echo '<pre style="color: #000">';
    print_r($scope);
    echo '</pre>';
    echo '</div>';
    echo '<div style="clear: both"></div>';
}

function error($text)
{
    echo '<div style="clear: both"></div>';
    echo '<div style="background-color: rgb(255,72,65); width: 100%; padding: 100px">';
    echo '<pre style="color: #fff"><h2>';
    print_r($text);
    echo '</pre><h2/>';
    echo '</div>';
    echo '<div style="clear: both"></div>';
    die();
}