<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use App\Models\Pet;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

    $pets = auth()->user()->pets ?? collect(); // make sure it's at least an empty collection

    $reminders = Reminder::whereIn('pet_id', $pets->pluck('id'))
        ->whereDate('created_at', '<=', $today)
        ->get();

        $pets = Pet::where('user_id', auth()->id())
              ->orderBy('name')
              ->get();
              $completedCount = Reminder::where('user_id', auth()->id())
              ->whereDate('date', now()->toDateString())
              ->where('completed', true)
              ->count();

    return view('dashboard', compact('reminders','pets', 'completedCount'));
    }
}
