<?php

namespace App\Http\Controllers;

use App\Models\Criteria; // Import the Criteria model
use Illuminate\Http\Request;
use Illuminate\View\View; // Import the View class

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View // Specify the return type as View
    {
        // Fetch all criteria from the database
        $criteria = Criteria::all();

        // Pass the criteria data to the view
        return view('criteria.index', compact('criteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View // Specify the return type as View
    {
        // Display the form to create a new criteria
        return view('criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|unique:criterias,name',
            'type' => 'required|in:benefit,cost',
            'weight' => 'required|numeric|min:0|max:1',
            'unit' => 'required',
        ]);

        // Create a new criteria in the database
        Criteria::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('criteria.index')->with('success', 'Criteria berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View // Specify the return type as View
    {
        // Fetch the criteria by ID
        $criteria = Criteria::findOrFail($id);

        // Pass the criteria data to the view
        return view('criteria.show', compact('criteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View // Specify the return type as View
    {
        // Fetch the criteria by ID for editing
        $criteria = Criteria::findOrFail($id);

        // Pass the criteria data to the view
        return view('criteria.edit', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|unique:criterias,name,' . $id, // Ensure name is unique, except for the current ID
            'type' => 'required|in:benefit,cost',
            'weight' => 'required|numeric|min:0|max:1',
            'unit' => 'required',
        ]);

        // Update the criteria in the database
        $criteria = Criteria::findOrFail($id);
        $criteria->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('criteria.index')->with('success', 'Criteria berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the criteria from the database
        $criteria = Criteria::findOrFail($id);
        $criteria->delete();

        // Redirect to the index page with a success message
        return redirect()->route('criteria.index')->with('success', 'Criteria berhasil dihapus.');
    }
}
