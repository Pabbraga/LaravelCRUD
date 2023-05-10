<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public $users = [
        [
            'id' => 1,
            'name' => 'Paulo André',
            'email' => 'pauloand@teste.com',
            'age' => 25
        ],
        [
            'id' => 2,
            'name' => 'Luciana Ferreira',
            'email' => 'luferreira@teste.com',
            'age' => 38
        ],
        [
            'id' => 3,
            'name' => 'Carlos Augusto',
            'email' => 'carlosaug@teste.com',
            'age' => 42
        ]
    ]; 

    public function index()
    { 
        if(isset($_POST['users'])) {
            $users = $_POST['users'];
            return view("home", ['users' => $users]);
        }
        return view("home", ['users' => $this->users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = 0;
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        foreach($this->users as $user) {
            $id = $user['id'] + 1;
        }

        $user = [
            'id' => $id, 
            'name' => $name, 
            'email' => $email, 
            'age' => $age
        ];

        return view('result', ['user' => $user]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        foreach($this->users as $user) {
            if($user['id'] === $id) {
                return view('result', ['user' => $user]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        foreach($this->users as $user) {
            if($user['id'] === $id) {
                
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        $user['name'] = $name;
        $user['email'] = $email;
        $user['age'] = $age;
        return view('result', ['user' => $user, 'msg' => "Usuário editado com sucesso."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        foreach($this->users as $user) {
            if($user['id'] === $id) {
                return view('result', ['msg' => "Usuário excluído com sucesso."]);
            }
        }
    }
}
