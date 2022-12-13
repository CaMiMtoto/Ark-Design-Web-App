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
use Illuminate\Support\Collection;
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
        $teams = Team::query()->active()->get();
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
        // select all projects in current year and group by month and count
        $projects = $this->getProjectsForCurrentYear();

        // select all projects by project type in current year and group by project type and count
        $projectsByType = $this->getProjectsByTypeForCurrentYear();

        // convert to array of name and value
        $projectsByTypes = $projectsByType->map(function ($item, $key) {
            return [
                'name' => $key,
                'value' => $item
            ];
        })->values();

        return view('admin.dashboard', [
            'projects' => $projects,
            'projectsByTypes' => $projectsByTypes,
        ]);
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

    /**
     * @return Collection
     */
    public function getProjectsForCurrentYear(): Collection
    {
        $projects = Project::query()
            ->selectRaw('count(*) as count, month(created_at) as month')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('count', 'month');

        for ($i = 1; $i <= 12; $i++) {
            if (!isset($projects[$i])) {
                $projects[$i] = 0;
            }
        }
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $projects = $projects->sortKeys()
            ->map(function ($item, $key) use ($months) {
                return [
                    'month' => $months[$key - 1],
                    'count' => $item,
                ];
            });
        return $projects->values();
    }

    private function addMissingMonths(Collection $projects)
    {
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];
        $missingMonths = [];
        foreach ($months as $key => $month) {
            if (!$projects->has($key)) {
                $missingMonths[$key] = 0;
            }
        }
        return $projects->merge($missingMonths);
    }

    private function getProjectsByTypeForCurrentYear()
    {
        // select project type name and count of projects in current year and group by project type name and count
        return Project::query()
            ->selectRaw('count(*) as count, project_types.name as name')
            ->join('project_types', 'project_types.id', '=', 'projects.project_type_id')
            ->whereYear('projects.created_at', date('Y'))
            ->groupBy('project_types.name')
            ->pluck('count', 'name');
    }
}
