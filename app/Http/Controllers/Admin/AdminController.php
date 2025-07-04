<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('madmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Category::where('status', 'Active')->count();
        $data['product']  = Product::where('status', 'Active')->count();
        $data['customer'] = Customer::count();
        $data['visitor']  = Visitor::count();
        // CUSTMERS
        $data['customers'] = Customer::orderBy('id', 'DESC')->limit(4)->get();
        $data['order']    = Order::count();
        $data['orders']   = Order::orderBy('id', 'DESC')->limit(4)->get();
        $data['products'] = Product::orderBy('id', 'DESC')->limit(4)->get();
        //dd($products);
        // Chart data: visitors per day
        // $visitorStats = Visitor::selectRaw('DATE(created_at) as date, COUNT(*) as count')
        //     ->groupBy('date')
        //     ->orderBy('date', 'asc')
        //     ->get();

        // $data['chartLabels'] = $chartLabels = $visitorStats->pluck('date')->toArray();
        // $data['chartData'] = $chartData = $visitorStats->pluck('count')->toArray();

        // $morrisChartData = [];

        // foreach ($chartLabels as $index => $date) {
        //     $morrisChartData[] = [
        //         'y' => $date,
        //         'visitors' => $chartData[$index]
        //     ];
        // }
        // $data['morrisChartData'] = $morrisChartData;
        $startDate = Carbon::now()->subDays(14)->startOfDay(); // last 15 days including today
        $endDate = Carbon::now()->endOfDay();

        // Step 1: Get raw data
        $visitorStats = Visitor::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get()
            ->keyBy('date');

        // Step 2: Ensure all last 15 days exist (even with 0 visitors)
        $morrisChartData = [];
        for ($i = 14; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();
            $morrisChartData[] = [
                'y' => Carbon::parse($date)->format('M d'),
                'visitors' => $visitorStats[$date]->count ?? 0
            ];
        }

        $data['morrisChartData'] = $morrisChartData;
        // return $data;
        return view('Admin.deshboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
