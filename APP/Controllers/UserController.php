<?php


namespace App\Controllers;


use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::Find(1);
    }

    public function show()
    {

    }
}
