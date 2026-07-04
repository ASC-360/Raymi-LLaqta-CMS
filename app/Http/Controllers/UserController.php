<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->when(request('search'), function ($query) {

                $query->where('name', 'like', '%' . request('search') . '%');

            })
            ->when(request('role'), function ($query) {

                $query->where('role', request('role'));

            })
            ->get();


        return view('dashboard.dashboard', compact('users'));
    }
}
