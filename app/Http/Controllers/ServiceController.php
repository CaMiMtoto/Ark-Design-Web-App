<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\ServiceType;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{

    public function index()
    {
        $data = Service::with('serviceType');
        if (request()->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('admin.services.show', $row->id) . '" class="js-edit btn btn-light-primary btn-sm btn-icon rounded-circle"><i class="bi bi-pencil-square"></i></a>';
                    $btn .= '<a href="' . route('admin.services.destroy', $row->id) . '" class="js-delete btn btn-light-danger btn-sm btn-icon rounded-circle"><i class="bi bi-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $types = ServiceType::all();
        return view('admin.services', [
            'types' => $types
        ]);
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $id = $request->input('id');
        if ($id) {
            $service = Service::find($id);
            $service->update($data);
        } else {
            Service::create($data);
        }
        session()->flash('success', 'Service saved successfully');
        return response()->json(['success' => 'Service saved successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return response()->json($service, 200);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('success', 'Service deleted successfully');
        return response()->json(['success' => 'Service deleted successfully'], 200);
    }
}
