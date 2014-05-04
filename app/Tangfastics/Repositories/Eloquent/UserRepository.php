<?php

namespace Tangfastics\Repositories\Eloquent;

use Tangfastics\Models\User;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Tangfastics\Repositories\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function findAll()
    {
        //code
    }

    public function findAllPaginated($perPage=25)
    {
        return $this->model->orderBy('username', 'ASC')->paginate($perPage);
    }

    public function findByUsername($username)
    {
        //code
    }

    public function findByEmail($email)
    {
        //code
    }

    public function create(array $data)
    {
        $user = $this->getNew();

        $user->username = e($data['username']);
        $user->email = e($data['email']);
        $user->password = Hash::make($data['password']);

        $user->save();

        return $user;
    }
}