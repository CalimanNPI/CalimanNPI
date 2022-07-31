<?php
class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        //echo '<p>NUevo controlafor main</p>';
    }

    public function saludo()
    {
        echo '<p>Ejecutando el método saludar</p>';
    }
}
