<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
             'identifiant' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'roles' => ['required', 'string', 'max:255'],
            
            'password' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'nom' => $input['nom'],
            'prenom' => $input['prenom'],
            'email' => $input['email'],
            'identifiant' => $input['identifiant'],
            $resultP = $input['roles'],
            $result = DB::table('roles')->select('id')->where('role',$resultP)->first(),
            'roles_id' => $result->id, 
            'password' => Hash::make($input['password']),
        ]);
    }
}
