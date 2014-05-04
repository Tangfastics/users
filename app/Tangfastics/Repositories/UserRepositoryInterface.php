<?php

namespace Tangfastics\Repositories;

use Tangfastics\Models\User;

interface UserRepositoryInterface
{
    public function findAll();

    public function findAllPaginated($perPage=10);

    public function findByUsername($username);

    public function findByEmail($email);

    public function create(array $data);
}
