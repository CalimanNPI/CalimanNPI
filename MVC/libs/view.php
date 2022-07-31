<?php
class View
{
    function __construct()
    {
        echo '<p>views</p>';
    }
    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}
