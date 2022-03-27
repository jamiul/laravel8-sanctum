<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function all();
    public function authUser();
    public function birthDate();
    public function get($userId);
    public function store(array $users);
    public function update($userId, array $users);
    public function delete($userId);
}
