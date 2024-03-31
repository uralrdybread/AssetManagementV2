<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class ReportsController extends Controller
{
    public function index()
{
    // Retrieve devices meeting the criteria
    $assets = Asset::whereRaw('TIMESTAMPDIFF(MONTH, assignment_date, NOW()) >= ?', [34])->get();

    // Load associated employee data
    $assets->load('employee');

    // Retrieve all assets
    $allAssets = Asset::all();

    // Filter assets without an employee ID or assignment date
    $unassignedAssets = $allAssets->filter(function ($asset) {
        return !$asset->employee_id || !$asset->assignment_date;
    });

    // Return the view with devices data
    return view('reports.index', compact('assets', 'unassignedAssets'));
}
}
