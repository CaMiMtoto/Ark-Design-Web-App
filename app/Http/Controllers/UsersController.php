<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUser;
use App\Mail\UserCreated;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class UsersController extends Controller
{

    /**
     * @throws \Exception
     */
    public function index()
    {
        $data = User::query()->withCount('permissions')
            ->where('id', '!=', auth()->id());
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('active', function (User $row) {
                    return '<a class="js-change-status" href="' . route("admin.users.active-toggle", $row->id) . '">
                                <span class="badge bg-' . $row->activeColor . ' rounded-pill">' . $row->active . '</span>
                            </a>';
                })
                ->addColumn('action', function (User $row) {
                    return '<div class="dropdown">
                              <button class="btn btn-light-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Options
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item js-edit" href="' . route('admin.users.show', $row->id) . '">Edit</a></li>
                                <li><a class="dropdown-item js-delete" href="' . route('admin.users.destroy', $row->id) . '">Delete</a></li>
                                <li><a class="dropdown-item js-permissions" href="' . route('admin.users.permissions', $row->id) . '">Permissions(' . $row->permissions_count . ')</a></li>
                              </ul>
                            </div>';
                })
                ->rawColumns(['action', 'active'])
                ->make(true);
        }

        return view('admin.users');

    }

    public function store(ValidateUser $request)
    {
        $data = $request->validated();
        $id = $request->input('id');
        if ($id) {
            $user = User::query()->find($id);
            $user->update($data);
            return response()->json(['success' => 'Data is successfully updated']);
        } else {
            $random = Str::random(8);
            $data['password'] = bcrypt($random);
            $user = User::query()->create($data);
            Mail::to($user)->send(new UserCreated($user, $random));

            return response()->json(['success' => 'Data is successfully added']);
        }
    }


    public function show(User $user)
    {
        return response()->json($user);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['success' => 'Data is successfully deleted']);
    }

    public function permissions(User $user)
    {
        $givenPermissions = $user->permissions()->pluck('id')->toArray();
        $permissions = Permission::query()->get();
        return view('admin._permissions', [
            'user' => $user,
            'givenPermissions' => $givenPermissions,
            'permissions' => $permissions
        ]);
    }

    public function assignPermissions(Request $request, User $user)
    {
        $permissions = $request->input('permissions');
        $user->syncPermissions($permissions);
        return response()->json(['success' => 'Permissions are successfully assigned']);
    }

    public function toggleActive(User $user)
    {
        $user->update(['is_active' => !$user->is_active]);
        return response()->json(['success' => 'User status is successfully updated']);
    }
}
