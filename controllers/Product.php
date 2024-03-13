<?php

class Product {
    public function get(int $id): string 
    {
        return 'Вызван метод get() из класса Product';
    }
    public function getAll(): string
    {
        return 'Вызван метод getAll() из класса Product';
    }
}