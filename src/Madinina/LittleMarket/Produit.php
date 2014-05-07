<?php

namespace Madinina\LittleMarket;

use DateTime;
use ProduitInterface;

class Produit implements ProduitInterface{

    private $nom;
    private $image;
    private $created;
    private $updated;
    private $categorie;

    function __construct( $nom = null, $image = null, $cat = null)
    {
        $date = new DateTime();

        $this->nom = is_string( $nom) ? $nom : null;
        $this->image = is_string( $image) ? $image : null;
        $this->categorie = is_string( $cat) ? new Categorie( $cat) : null;

        $this->created = $date;
        $this->updated = $date;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param null|string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return null|string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

}