<?php

interface ProduitInterface{

    /**
     * @param mixed $created
     */
    public function setCreated($date);

    /**
     * @return mixed
     */
    public function getCreated();

    /**
     * @param mixed $image
     */
    public function setImage($image);

    /**
     * @return mixed
     */
    public function getImage();

    /**
     * @param mixed $nom
     */
    public function setNom($nom);

    /**
     * @return mixed
     */
    public function getNom();

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated);
    /**
     * @return mixed
     */
    public function getUpdated();

    /**
     * @param null|string $categorie
     */
    public function setCategorie($categorie);

    /**
     * @return null|string
     */
    public function getCategorie();
}