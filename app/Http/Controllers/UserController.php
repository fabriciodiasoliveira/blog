<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    private $model;

    function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $this->model->store($data);
        return redirect()->route('users.index')->with('success', 'Um usuário inserido.');
    }

    public function show($id) {
        $user = $this->model->getUser($id);
        return view('users.show', compact('user'));
    }

    public function edit($id) {
        $user = $this->model->getUser($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $this->model->updateWingoutModel($id, $this->setData($data));
        return redirect()->route('users.index')->with('success', 'Usuário alterado');
    }

    public function destroy($id) {
        $this->model->remove($id);
        return redirect()->route('users.index')->with('success', 'Usuário deletado');;
    }
}
