@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion utilisateurs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Identifiant</th>
            <th>Adresse e-mail</th>
            <th>Role</th>        
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->identifiant }}</td>
                <!--<td>{{ $user->roles_id }}</td>!-->
                <td>{{ $user->email}}</td>
                <td><?php

                    //$user->roles_id 
                     $roles  = $user->roles_id;
                    $result = DB::table('roles')->whereId($roles)->pluck('role');
                    foreach ($result as $role => $value) {
                                echo $value;
                            }
                ?></td>

                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                        <a href="{{ route('users.edit', $user->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection
