<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
            ->latest()
            ->paginate(10);
        return view('events', [
            'events' => $events
        ]);
    }
}
