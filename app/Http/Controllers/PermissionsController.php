<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::query()->withCount('users')->get();
        return view('admin.permissions', compact('permissions'));
    }
}
