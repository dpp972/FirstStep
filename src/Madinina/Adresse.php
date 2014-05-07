<?php

namespace Madinina;

class Adresse {

    private $numVoie;
    private $typeVoie;
    private $nomVoie;
    private $codePostal;
    private $ville;
    private $pays;

    function __construct($codePostal, $nomVoie, $numVoie, $pays, $typeVoie, $ville)
    {
        $this->codePostal = $codePostal;
        $this->nomVoie = $nomVoie;
        $this->numVoie = $numVoie;
        $this->pays = $pays;
        $this->typeVoie = $typeVoie;
        $this->ville = $ville;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $nomVoie
     */
    public function setNomVoie($nomVoie)
    {
        $this->nomVoie = $nomVoie;
    }

    /**
     * @return mixed
     */
    public function getNomVoie()
    {
        return $this->nomVoie;
    }

    /**
     * @param mixed $numVoie
     */
    public function setNumVoie($numVoie)
    {
        $this->numVoie = $numVoie;
    }

    /**
     * @return mixed
     */
    public function getNumVoie()
    {
        return $this->numVoie;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $typeVoie
     */
    public function setTypeVoie($typeVoie)
    {
        $this->typeVoie = $typeVoie;
    }

    /**
     * @return mixed
     */
    public function getTypeVoie()
    {
        return $this->typeVoie;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }



}