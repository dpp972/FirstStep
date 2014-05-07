<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/05/14
 * Time: 17:12
 */

namespace Madinina\LittleMarket;

use ProduitInterface;

class Panier {

    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    /**
     * @param ProduitInterface $prod
     */
    public function addProduct( ProduitInterface $prod)
    {
        $this->products[] = $prod;
    }

    /**
     * @param ProduitInterface $prod
     */
    public function removeProduct( ProduitInterface $prod)
    {
        if( in_array( $prod, $this->products)){

        };
    }

}