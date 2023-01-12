@extends('layouts.app')

@section('content')
    <div class="section">
        <h1 class="mt-md-3 mt-3 text-title">Agregar un usuario</h1>
        <hr />
        <form name="users" id="users" method="POST" action="{{ route('users.create') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role">
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Agregar</button>
        </form>

    </div>
@endsection
