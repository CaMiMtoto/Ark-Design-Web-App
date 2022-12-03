<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Exception;
use Illuminate\Support\Facades\Storage;
use Str;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{

    /**
     * @throws Exception
     */
    public function index()
    {
        $data = Event::query();
        if (request()->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Event $row) {
                    return '<div class="dropdown">
                              <button class="btn btn-light-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Options
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item js-edit" href="' . route('admin.events.show', $row->id) . '">Edit</a></li>
                                <li><a class="dropdown-item js-delete" href="' . route('admin.events.destroy', $row->id) . '">Delete</a></li>
                              </ul>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.events');
    }

    public function store(StoreEventRequest $request)
    {
        $data = $request->validated();
        $id = $request->input('id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $dir = 'public/events/';
            $path = $image->store($dir);
            $data['image'] = str_replace($dir, '', $path);
        }
        if ($id > 0) {
            $event = Event::find($id);
            $event->update($data);
        } else {
            $event = Event::create($data);
        }
        return response()->json(['success' => 'Data is successfully updated']);
    }


    public function show(Event $event)
    {
        return response()->json($event);
    }


    public function destroy(Event $event)
    {
        $file = 'public/events/' . $event->image;
        $event->delete();
        if (file_exists($file)) {
            Storage::delete($file);
        }

        return response()->json(['success' => 'Event deleted successfully.']);
    }
}
