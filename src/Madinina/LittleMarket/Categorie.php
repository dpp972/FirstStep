<?php

namespace Madinina\LittleMarket;

class Categorie {

    private $nom;
//    private $products;

    function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param $nom
     * @return $this
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

}