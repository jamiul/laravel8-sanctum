<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
    public function get($userId)
    {
        return User::find($userId);
    }
    public function store(array $users)
    {
        return User::create($users);
    }
    public function update($userId, array $users)
    {
        return User::find($userId)->update($users);
    }
    public function delete($userId)
    {
        return User::destroy($userId);
    }
}
