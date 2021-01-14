<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Role};
use DB;

class UserController extends Controller
{
	public function index()
	{
		//$user = DB::table('users')->join('roles', 'users.roles_id', '=', 'roles.id')->get();
		//return view('users', ['users' => $user]);
		$users = User::latest()->paginate(5);
    
        return view('crud.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
	}
    //
    public function create()
    {
        return view('crud.register');
        //return view('crud.create');
    }

    public function show(User $user)
    {
        return view('crud.show', compact('user'));
    }


 	public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'Utilisateur supprimé avec succès');
    }

     public function edit(User $user)
    {
        return view('crud.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'roles' => 'required',
            'identifiant' => 'required',
            'email' => 'required',
            'password' => 'required',
            

        ]);
        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Utilisateur modifié avec succès');
    }

}
