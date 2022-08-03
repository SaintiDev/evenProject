<?php

namespace Library\Controllers;

abstract class AbstractController
{
    public function render(string $template, array $vars = []): void
    {
        // Transforme toutes les clés du tableau en variables
        extract($vars);
        require 'App/Views/layout.phtml';
    }
}