<?php

require_once __DIR__ . '/../models/Produit.php'; 

class ProduitRepository {
    public function getAllProducts() {
        return [
            new Produit(1, 'Smartphone', 999.00, 'smartphone.png'),
            new Produit(2, 'Ordinateur Portable',1200.00, 'ordi.png'),
            new Produit(3, 'Casque Audio', 300.00, 'casque.png'),
            new Produit(4, 'Bouilloire', 30.00, 'bouilloire.png'),
        ];
    }
}
