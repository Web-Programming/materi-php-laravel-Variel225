<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $listmateri = Materi::all();
        return view('materi.index', ['listmateri' => $listmateri]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'deskripsi' => 'required|min:5|max:255',
        ]);
        Materi::create($data);
        return redirect()->route('materi.index')->with('status', 'Materi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $materi = Materi::find($id);
        if (!isset($materi->id)) {
            return redirect()->route('materi.index')->with('failed', 'Materi tidak ditemukan!');
        }
        return view('materi.edit', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}