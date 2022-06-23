<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Permission;
use Auth;

class PostController extends Controller {

    private $model;

    function __construct() {
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->getAllPosts();
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $this->model->store($data);
        return redirect()->route('post.index')->with('success', 'Uma Postagem inserida.');
    }

    public function show($id) {
        $post = $this->model->getPost($id);
        return view('posts.show', compact('post'));
    }
    public function showUser($id) {
        $post = $this->model->getPost($id);
        return view('posts.post', compact('post'));
    }

    public function edit($id) {
        $post = $this->model->getPost($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $this->model->updateWingoutModel($id, $data);
         return redirect()->route('post.index')->with('success', 'Postagem alterada');
    }

    public function destroy($id) {
        $this->model->remove($id);
        return redirect()->route('post.index')->with('success', 'Postagem deletada');
    }
}
