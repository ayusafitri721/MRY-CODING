<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard with basic datasets used by the Blade skeleton.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        // We don't have per-user class ownership in the current schema.
        // Select a sensible default: the latest class as the "active" one,
        // and show global lists for recommendations and explore.
        $activeClass = ClassModel::latest()->first();

        $recommendations = ClassModel::where('id', '!=', $activeClass->id ?? 0)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $classes = ClassModel::orderBy('created_at', 'desc')->take(12)->get();

        // Basic summary metrics (best-effort). Views will gracefully fallback.
        $summary = [
            'active_classes' => ClassModel::count(),
            'avg_progress' => 0,
            'pending_tasks' => 0,
            'hours_this_month' => '12h',
            'modules_done' => 0,
            'streak' => 0,
        ];

        return view('dashboard', compact('user', 'activeClass', 'recommendations', 'classes', 'summary'));
    }
}
