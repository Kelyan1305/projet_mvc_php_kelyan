<?php

class Produit {
    private $id;
    private $name;
    private $price;
    private $image; 

    public function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return './images/'.$this->image; // Chemin vers l'image
    }
}
