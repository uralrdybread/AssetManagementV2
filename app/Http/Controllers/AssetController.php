<?php


namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetStatus;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Fetch all assets from the database
         $assets = Asset::with('employee', 'status')->paginate(10);

        // Fetch all assets from the database with the 'employee' relationship eager loaded
        // $assets = Asset::with('employee', 'status')->get();

        // dd($assets);

        // Pass the assets data to the view
        return view('assets.index', compact('assets'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'company' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'serial' => 'required|string|unique:assets|max:255',
            'history_log' => 'nullable|string',
            'assignment_date' => 'nullable|date',
            'employee_id' => 'nullable|exists:employees,id',
        ]);

        $asset = Asset::create($validatedData);

        session()->flash('success', 'Asset created successfully.');

        return redirect()->route('assets.show', $asset);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        return view('assets.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        $statuses = AssetStatus::all();

        return view('assets.edit', compact('asset', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('assets.index')->with('success', 'Asset deleted successfully.');
    }
}
