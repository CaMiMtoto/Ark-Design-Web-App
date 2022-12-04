<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectType;
use Exception;
use Illuminate\Http\Request;
use Storage;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{

    /**
     * @throws Exception
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
                                <li><a class="dropdown-item js-images" data-images-url="'.route('admin.projects.images',$row->id).'" href="' . route('admin.projects.images.store', $row->id) . '">Images</a></li>
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

    public function storeImages(Project $project, Request $request)
    {
        if ($request->hasFile('filepond')) {
            $dir = 'public/projects/images/';
            $file = $request->file('filepond');
            $path = $file->store($dir);
            $project->images()->create([
                'file_name' => str_replace($dir, '', $path)
            ]);
            return response()->json(['success' => 'Image uploaded successfully.']);
        }
        return response()->json(['error' => 'Image upload failed.'], 400);
    }

    public function destroyImage(Project $project, Request $request)
    {
        $image = $project->images()->find($request->input('id'));
        if ($image) {
            $fileName = $image->file_name;
            $image->delete();
            $path = "public/projects/images/" . $fileName;
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
            return response()->json(['success' => 'Image deleted successfully.']);
        }
        return response()->json(['error' => 'Image delete failed.'], 400);
    }

    public function images(Project $project)
    {
        $images = $project->images;
        return view('admin._images', [
            'images' => $images,
            'project' => $project
        ]);
    }
}
