<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dosen.index');
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
        $dosenList = [
            1 => (object)[
                'nama' => 'Kabucha',
                'program' => 'Sistem Informasi',
                'status' => 'Tetap',
                'tanggal_lahir' => '21-06-1989',
                'tempat_lahir' => 'Korea'
            ],
            2 => (object)[
                'nama' => 'Dokebara',
                'program' => 'Informatika',
                'status' => 'Kontrak',
                'tanggal_lahir' => '04-10-1987',
                'tempat_lahir' => 'Jepang'
            ],
        ];

        $dosen = $dosenList[$id];
        return view('dosen.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
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