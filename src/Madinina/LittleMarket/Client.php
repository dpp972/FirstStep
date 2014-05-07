<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/05/14
 * Time: 17:12
 */

namespace Madinina\LittleMarket;

use Madinina\Adresse;

class Client {

    private $prenom;
    private $nom;
    private $adresse;
    private $panier;


    public function __construct( $p = null, $n = null, Adresse $ad = null)
    {
        $this->prenom = $p;
        $this->nom = $n;
        $this->adresse = $ad;

        $this->panier = new Panier();
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
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
     * @param $prenom
     * @return $this
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @param $adresse
     * @return $this
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * @return \Madinina\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param $panier
     * @return $this
     */
    public function setPanier($panier)
    {
        $this->panier = $panier;
        return $this;
    }

    /**
     * @return \Madinina\LittleMarket\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }



}