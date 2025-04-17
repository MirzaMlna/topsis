<?php

namespace App\Http\Controllers;

use App\Models\AlternativeCriteriaValue;
use App\Models\Alternative; // Import model Alternative
use App\Models\Criteria;    // Import model Criteria
use Illuminate\Http\Request;
use Illuminate\View\View;

class AlternativeCriteriaValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $alternativeCriteriaValues = AlternativeCriteriaValue::with(['alternative', 'criteria'])->get();
        return view('alternative_criteria_value.index', compact('alternativeCriteriaValues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $alternatives = Alternative::all();
        $criteria = Criteria::all();
        return view('alternative_criteria_value.create', compact('alternatives', 'criteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alternative_id' => 'required|exists:alternatives,id',
            'criteria_id'    => 'required|exists:criterias,id',
            'value'          => 'required|integer',
        ]);

        AlternativeCriteriaValue::create($request->all());

        return redirect()->route('alternative_criteria_value.index')->with('success', 'Nilai Kriteria Alternatif berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $alternativeCriteriaValue = AlternativeCriteriaValue::with(['alternative', 'criteria'])->findOrFail($id);
        return view('alternative_criteria_value.show', compact('alternativeCriteriaValue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $alternativeCriteriaValue = AlternativeCriteriaValue::findOrFail($id);
        $alternatives = Alternative::all();
        $criteria = Criteria::all();
        return view('alternative_criteria_value.edit', compact('alternativeCriteriaValue', 'alternatives', 'criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'alternative_id' => 'required|exists:alternatives,id',
            'criteria_id'    => 'required|exists:criterias,id',
            'value'          => 'required|integer',
        ]);

        $alternativeCriteriaValue = AlternativeCriteriaValue::findOrFail($id);
        $alternativeCriteriaValue->update($request->all());

        return redirect()->route('alternative_criteria_value.index')->with('success', 'Nilai Kriteria Alternatif berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alternativeCriteriaValue = AlternativeCriteriaValue::findOrFail($id);
        $alternativeCriteriaValue->delete();

        return redirect()->route('alternative_criteria_value.index')->with('success', 'Nilai Kriteria Alternatif berhasil dihapus.');
    }
}
