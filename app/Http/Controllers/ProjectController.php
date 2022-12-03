<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectType;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{

    /**
     * @throws \Exception
     */
    public function index()
    {
        $data = Project::with('projectType');
        if (request()->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Project $row) {
                    return '<div class="dropdown">
                              <button class="btn btn-light-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Options
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item js-edit" href="' . route('admin.projects.show', $row->id) . '">Edit</a></li>
                                <li><a class="dropdown-item js-delete" href="' . route('admin.projects.destroy', $row->id) . '">Delete</a></li>
                              </ul>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.projects', [
            'types' => ProjectType::all()
        ]);
    }


    public function create()
    {
        //
    }


    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $id = $request->input('id');
        if ($id) {
            $project = Project::find($id);
            $project->update($data);
        } else {
            $project = Project::create($data);
        }

        return response()->json(['success' => 'Project saved successfully.']);
    }


    public function show(Project $project)
    {
        return $project;
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(['success' => 'Project deleted successfully.']);
    }
}
