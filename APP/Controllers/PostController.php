<?php


namespace App\Controllers;


class PostController extends Controller
{
    public function index()
    {
        return $this->view('posts');
    }
}
