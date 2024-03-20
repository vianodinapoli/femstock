<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{

    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view(view: 'users', data: ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        notify()->success('Usuário adicionado com sucesso');

        $created = $this->user->create([
            'name' => $request->input(key: 'name'),
            'email' => $request->input(key: 'email'),
            'password' => password_hash($request->input(key: 'password'), PASSWORD_DEFAULT),
        ]);

        // if ($created){
        //     return redirect()->back()->with(key:'message', value:'Criado com sucesso');
        // }
        // return redirect()->back()->with(key:'message', value:'Erro na criação de usuário');
        return redirect()->route('users.index');
    }




    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return view(view: 'user_show', data: ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $updated = $this->user->where('id', $id)->update($request->except(keys:['_token', '_method']));
        // if ($updated){
        //     return redirect()->back()->with(key:'message', value:'Actualizado com sucesso');
        // }
        notify()->success('Actualizado com sucesso com sucesso');


        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        notify()->success('Usuário apagado com sucesso!');


        $this->user->where('id', $id)->delete();
        return redirect()->route(route: 'users.index');
    }
}
