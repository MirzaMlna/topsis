<?php

namespace App\Http\Controllers;

use App\Models\SubCriteria; // Import the SubCriteria model
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Fetch all sub-criteria from the database
        $subCriteria = SubCriteria::with('criteria')->get(); // Eager load the related criteria

        // Pass the sub-criteria data to the view
        return view('sub-criteria.index', compact('subCriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //  kode ini mengambil semua data kriteria dari tabel "criterias" dan mengirimkannya ke tampilan (view) "sub-criteria.create". 
        $criteria = \App\Models\Criteria::all();
        return view('sub-criteria.create', compact('criteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'criteria_id' => 'required|exists:criterias,id',
            'sub_criteria' => 'required',
            'value' => 'required|integer',
        ]);

        // Create a new sub-criteria in the database
        SubCriteria::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('sub-criteria.index')->with('success', 'Sub-Criteria berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        // Fetch the sub-criteria by ID
        $subCriteria = SubCriteria::with('criteria')->findOrFail($id); // Eager load the related criteria

        // Pass the sub-criteria data to the view
        return view('sub-criteria.show', compact('subCriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        // Fetch the sub-criteria by ID for editing
        $subCriteria = SubCriteria::findOrFail($id);
        $criteria = \App\Models\Criteria::all();

        // Pass the sub-criteria data to the view
        return view('sub-criteria.edit', compact('subCriteria', 'criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the input data
        $request->validate([
            'criteria_id' => 'required|exists:criterias,id',
            'sub_criteria' => 'required',
            'value' => 'required|integer',
        ]);

        // Update the sub-criteria in the database
        $subCriteria = SubCriteria::findOrFail($id);
        $subCriteria->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('sub-criteria.index')->with('success', 'Sub-Criteria berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the sub-criteria from the database
        $subCriteria = SubCriteria::findOrFail($id);
        $subCriteria->delete();

        // Redirect to the index page with a success message
        return redirect()->route('sub-criteria.index')->with('success', 'Sub-Criteria berhasil dihapus.');
    }
}
