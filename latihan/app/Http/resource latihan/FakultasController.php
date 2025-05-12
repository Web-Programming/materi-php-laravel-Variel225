<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('fakultas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fakultasList = [
            1 => (object)[
                    'nama' => 'Ilmu Komputer & Rekayasa',
                    'deskripsi' => 'Fakultas yang mempelajari jurusan ilmu komputer dan rekayasa'
            ],
            2 => (object)[
                    'nama' => 'Ekonomi & Bisnis',
                    'deskripsi' => 'Fakultas yang mempelajari jurusan ekonomi dan bisnis'
            ],
        ];

        $fakultas = $fakultasList[$id];
        return view('fakultas.detail', compact('fakultas'));
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
        
    }
}