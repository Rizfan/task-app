<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(User $user, Task $task)
    {
        $user = User::count();
        $task = Task::count();

        return view('dashboard', compact('user', 'task'));
    }
}
