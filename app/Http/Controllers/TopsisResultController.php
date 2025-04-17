<?php

namespace App\Http\Controllers;

use App\Models\TopsisResult;
use App\Models\Alternative; // Import model Alternative
use Illuminate\Http\Request;
use Illuminate\View\View;

class TopsisResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $topsisResults = TopsisResult::with('alternative')->get();
        return view('topsis_result.index', compact('topsisResults'));
    }

    /**
     * Store the calculated TOPSIS result in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data (sesuai kebutuhan)
        $request->validate([
            'alternative_id' => 'required|exists:alternatives,id',
            'positive_ideal_distance' => 'required|numeric',
            'negative_ideal_distance' => 'required|numeric',
            'preference_value' => 'required|numeric',
            'ranking' => 'required|integer',
        ]);

        // Simpan hasil TOPSIS
        TopsisResult::create($request->all());

        return redirect()->route('topsis_result.index')->with('success', 'Hasil TOPSIS berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id): View
    {
        $topsisResult = TopsisResult::with('alternative')->findOrFail($id);
        return view('topsis_result.show', compact('topsisResult'));
    }
}
