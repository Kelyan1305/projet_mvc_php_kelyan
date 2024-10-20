<?php

class HomeController {
    public function index() {
        // Logique pour la page d'accueil
        $loader = new \Twig\Loader\FilesystemLoader('../app/views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('home.twig');
    }
}
