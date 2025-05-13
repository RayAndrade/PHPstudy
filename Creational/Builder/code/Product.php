<?php

class Product
{
    private array $parts = [];
    public function add(string $part): void {
        $this->parts[] = $part;
    }
    public function show(): void {
        echo "Product Parts:\n";
        foreach ($this->parts as $part) {
            echo "- $part\n";
        }
    }
}