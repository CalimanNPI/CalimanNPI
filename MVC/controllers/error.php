<?php

class Errors extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = 'Error al cargar el recurso';
        $this->view->render('errors/index');
        //echo '<p>error</p>';
    }
}
