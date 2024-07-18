<?php

namespace App\Repository\Interface;
use App\DTO\CartDTO;


interface ICartRepository {

    public function createObject($createCartRequest) ;

    public function updateObject(object $cart, $cartDTO) ;


    public function getAll();

    public function getObject($id) : object;

    public function insertCart($products) : array ;

    public function addToCart($product) ;

    public function removeFromCart($id);


}

