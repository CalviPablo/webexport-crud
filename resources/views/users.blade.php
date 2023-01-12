@extends('layouts.app')

@section('content')
    <a href="/users/create" class="btn btn-secondary mt-3 mb-3">Agregar User</a>


    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->user }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->role_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
