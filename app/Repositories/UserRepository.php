<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
    public function authUser()
    {
        return User::find(Auth::user()->id);
    }

    public function birthDate()
    {
        return Auth::user()->created_at->format('jS, F Y');
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
