<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return $roles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            $validatedData = $request->validate([
                'role_name' => 'required|unique:roles',
            ]);

            $role = Role::create($validatedData);
            return $role;
            return response()->json($role, 201);
        } catch (ValidationException $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $existingRole = Role::findOrFail($role->id);
        return $existingRole;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $id = $role->id;
        $validatedData = $request->validate([
            'role_name' => 'required|unique:roles',
        ]);
    
        $role = Role::findOrFail($id);
        $role->update($validatedData);
    
        return response()->json($role, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role = Role::findOrFail($role->id);
        $role->delete();
    }
}
