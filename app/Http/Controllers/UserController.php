<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\UpdateUserRolesRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $users = User::with('roles')->find($user->id);
        return view('users.edit', compact('users'));
    }

    public function update(UpdateUserRolesRequest $request, User $user)
    {
        $user->syncRoles($request->role);
        return redirect()->route('users.index');
    }
}
