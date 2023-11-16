<?php

namespace App\RepositoriesInterface;

interface  BaseInterface
{
    public function create(array $data);
    public function update(array $data);
    public function delete(int $id);
    public function find(int $id);
}
