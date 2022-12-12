<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use App\Http\Requests\StoreProjectTypeRequest;
use App\Http\Requests\UpdateProjectTypeRequest;

class ProjectTypeController extends Controller
{

    /**
     * @throws \Exception
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(ProjectType::latest()->get())
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('admin.project-types.edit', $data->id) . '" name="edit"  class="edit btn btn-light-primary btn-sm btn-icon rounded-circle js-edit"><i class="bi bi-pencil-square"></i></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<a href="' . route('admin.project-types.destroy', $data->id) . '"  class="delete btn btn-light-danger btn-sm js-delete btn-icon rounded-circle"><i class="bi bi-trash"></i></button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.project_types');
    }

    public function store(StoreProjectTypeRequest $request)
    {
        $validated = $request->validated();
        $id = $request->input('id');

        if ($id > 0) {
            $projectType = ProjectType::find($id);
            $projectType->update($validated);
            return response()->json(['success' => 'Data is successfully updated']);
        } else {
            $projectType = ProjectType::create($validated);
            return response()->json(['success' => 'Data is successfully added']);
        }
    }


    public function show(ProjectType $projectType)
    {
        return $projectType;
    }


    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();

        return response()->json(['success' => 'Data is successfully deleted']);
    }
}
