<?php
require_once 'Builder.php';
class Director
{
    private Builder $builder;
    public function __construct(Builder $builder) {
        $this->builder = $builder;
    }
    public function construct(): void {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
    }
}