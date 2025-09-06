<?php
header('Content-Type: application/json');

$celulares = [
    ['marca' => 'Samsung', 'modelo' => 'Galaxy S24', 'preco' => 3999],
    ['marca' => 'Apple', 'modelo' => 'iPhone 15', 'preco' => 4999],
    ['marca' => 'Xiaomi', 'modelo' => 'Redmi Note 13', 'preco' => 1299],
    ['marca' => 'Motorola', 'modelo' => 'Edge 40', 'preco' => 1999]
];

echo json_encode($celulares);
?>
