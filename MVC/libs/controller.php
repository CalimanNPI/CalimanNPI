<?php
class Controller
{
    function __construct()
    {
        echo '<p>controller</p>';
        $this->view = new View();
    }
}
