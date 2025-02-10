<?php
/**
 * Mastering PHP Classes: A Beginner’s Guide to Modern Object-Oriented Programming
 * 
 * @package Mastering_PHP_Classes
 * @version 2025
 */


class Product 
{
    public function __construct(
        private string $name = "", 
        private float $price = 0.0,
        private int $stock = 0,
        private string $description = "",
    ) {}

    public function isInStock(): bool 
    {
        return $this->stock > 0;
    }

    public function purchase(int $quantity): bool 
    {
        if($quantity <= $this->stock) {
            $this->stock -= $quantity;
            return true;
        }
        return false;
    }

    public function show(): array 
    {
        return [
            "name" => $this->name,
            "price" => $this->price,
            "stock" => $this->stock,
            "description" => $this->description,
        ];
    }
}

// $laptop = new Product("Laptop", 1000.0, 10, "A brand new laptop");
// if ($laptop->isInStock()) {
//     $laptop->purchase(2);
// }
// print_r($laptop->show());
/** @var string[] $tags */
$tags = ["electronics", "laptop", 1];


function createProduct(string $name, int $stock, bool $inStock, array $tags, ?string $description = null): array 
{
    return [
        "name" => $name,
        "stock" => $stock,
        "inStock" => $inStock,
        "tags" => $tags,
        "description" => $description,
    ];
}


print_r(createProduct(
    name: "Laptop", 
    stock: 1000.0, 
    inStock: false, 
    description: "A brand new laptop",
    tags: ["electronics", "laptop"]
));
?>