<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\Response;
use Storage;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::query();
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('action', function (Team $row) {
                    return '<div class="dropdown">
                              <button class="btn btn-light-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Options
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item js-edit" href="' . route('admin.teams.show', $row->id) . '">Edit</a></li>
                                <li><a class="dropdown-item js-delete" href="' . route('admin.teams.destroy', $row->id) . '">Delete</a></li>
                              </ul>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.teams');
    }

    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();
        $id = $request->input('id');
        if ($request->hasFile('image')) {
            $dir = 'public/teams';
            $path = $request->file('image')->store($dir);
            $data['image'] = str_replace($dir . '/', '', $path);
        }
        if ($id) {
            $team = Team::query()->find($id);
            $team->update($data);
            return response()->json(['success' => 'Data is successfully updated']);
        } else {
            $team = Team::query()->create($data);
            return response()->json(['success' => 'Data is successfully added']);
        }
    }

    public function show(Team $team)
    {
        return $team;
    }

    public function destroy(Team $team)
    {
        $fileName = $team->image;
        $team->delete();
        if ($fileName) {
            $dir = 'public/teams';
            Storage::delete($dir . '/' . $fileName);
        }
        return response()->json(['success' => 'Data is successfully deleted']);
    }
}
