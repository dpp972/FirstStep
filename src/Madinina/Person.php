<?php

namespace Madinina ;

class Person {

    private $prenom;
    private $nom;
    private $adresse;

    public function __construct( $p = null, $n = null, Adresse $ad = null)
    {
        $this->prenom = $p;
        $this->nom = $n;
        $this->adresse = $ad;
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
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param \Madinina\Adresse $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return \Madinina\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }



}