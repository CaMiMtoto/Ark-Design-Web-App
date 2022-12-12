<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Event;
use App\Models\Inquiry;
use App\Models\Project;
use App\Models\ServiceType;
use App\Models\Team;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Nette\Utils\Image;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $serviceTypes = ServiceType::with('services')->get();
        $teams = Team::all();
        $images = [
            "Image8.png",
            "Image9.png",
            "Image13.png",
            "Image15.png",
            "Image16.png",
            "Image19.png",
            "Image24.png",
        ];
        return view('welcome', [
            'serviceTypes' => $serviceTypes,
            'teams' => $teams,
            'images' => $images,
        ]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function events()
    {
        $events = Event::query()
            ->when(request('search'), function ($query) {
                $query->where('name', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('description', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('location', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('date', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('organizer', 'LIKE', '%' . request('search') . '%');
            })
            ->when(request('type'), function ($query) {
                $query->where('type', '=', request('type'));
            })
            ->latest()
            ->paginate(10);
        return view('events', [
            'events' => $events
        ]);
    }

    public function projects()
    {
        $projects = Project::query()
            ->with(['image', 'projectType'])
            ->whereHas('image')
            ->when(request('search'), function ($query) {
                $query->where('name', 'LIKE', '%' . request('search') . '%')
                    ->orWhere('location', 'LIKE', '%' . request('search') . '%');
            })
            ->when(request('type'), function ($query) {
                $query->where('project_type_id', '=', request('type'));
            })
            ->latest()
            ->paginate(10);
        return view('projects', [
            'projects' => $projects
        ]);
    }

    public function projectDetails(Project $project)
    {
        $project->load(['images', 'projectType']);
        return view('project_details', [
            'project' => $project
        ]);
    }

    public function saveInquiry(StoreInquiryRequest $request)
    {
        $validated = $request->validated();
        $inquiry = Inquiry::query()->create([
            'name' => $validated['name'],
            'upi_number' => $validated['upi'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Thank you for your inquiry. We will get back to you shortly.',
                'inquiry' => $inquiry
            ], 201);
        }
        return redirect()->back()->with('success', 'Inquiry sent successfully');
    }

    public function about()
    {
        return view('about');
    }
}
