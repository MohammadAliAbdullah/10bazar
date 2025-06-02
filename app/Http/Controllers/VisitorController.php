<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::latest()->paginate(20);

        // Chart data: visitors per day
        $visitorStats = Visitor::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        $chartLabels = $visitorStats->pluck('date')->toArray();
        $chartData = $visitorStats->pluck('count')->toArray();

        return view('visitors.index', compact('visitors', 'chartLabels', 'chartData'));
    }
}
