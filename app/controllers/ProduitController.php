<?php

class ProduitController {
    private $produitRepository;

    public function __construct() {
        $this->produitRepository = new ProduitRepository();
    }

    public function index() {
        $produits = $this->produitRepository->getAllProducts();
        $loader = new \Twig\Loader\FilesystemLoader('../app/views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('produits.twig', ['produits' => $produits]);
    }
}
