<?php

namespace App\Repositories\User;


interface UserRepositoryInterface
{
    public function create(array $data);

    public function getById($id);

    public function getAll();

    public function delete($id);

    public function update($id,array $data);

    public function findBy($key,$value);

}