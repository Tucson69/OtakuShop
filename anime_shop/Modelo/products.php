<?php

class Product
{
    public ?int $idProduct;
    public string $nameProduct;
    public string $description;
    public string $image;
    public float $price;

    public function __construct(
        string $nameProduct,
        string $description,
        string $image,
        float $price,
        ?int $idProduct = null
    ) {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
    }
}