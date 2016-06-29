<?php

namespace App\Controllers;


use DEVYZI\Controller\Action;

class WelcomeController extends Action
{
    public function show()
    {
        $this->render("welcome"); //Renderiza a view home
    }
}