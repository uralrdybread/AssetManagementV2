<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function index()
{
        // Retrieve devices meeting the 3 month criteria
        $assets = Asset::whereRaw('TIMESTAMPDIFF(MONTH, assignment_date, NOW()) >= ?', [34])->get();

        // Load associated employee data
        $assets->load('employee');

        // Paginate the unassigned assets query
        $unassignedAssets = DB::table('assets')
            ->leftJoin('employees', 'assets.employee_id', '=', 'employees.id')
            ->select('assets.*')
            ->whereNull('employees.id')
            ->orWhereNull('assets.assignment_date')
            ->paginate(5); 

        // Return the view with devices data
        return view('reports.index', compact('assets', 'unassignedAssets'));
}
}
