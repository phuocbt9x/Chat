<?php

namespace App\RepositoriesInterface;

interface  BaseInterface
{
    public function create(array $data);
    public function update(array $data);
    public function delete(string $id);
    public function find(string $id);
}
