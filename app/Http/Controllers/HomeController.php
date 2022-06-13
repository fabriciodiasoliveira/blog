<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    private $model;    
    public function __construct()
    {
        // $this->middleware('auth');
        $this->model = new Post();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = $this->model->getAllPosts();
        return view('welcome', compact('posts'));
    }
}
