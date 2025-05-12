<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mhs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mhs.create');
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
        $mahasiswaList = [
            1 => (object)[
                'nama' => 'Aska',
                'program' => 'Sistem Informasi',
                'status' => 'Aktif',
                'tanggal_lahir' => '24-9-2006',
                'tempat_lahir' => 'Palembang'
            ],
            2 => (object)[
                'nama' => 'Lirilari',
                'program' => 'Teknik Elektro',
                'status' => 'Cuti',
                'tanggal_lahir' => '7-05-2006',
                'tempat_lahir' => 'Palembang'
            ],
            3 => (object)[
                'nama' => 'Variel',
                'program' => 'Informatika',
                'status' => 'Aktif',
                'tanggal_lahir' => '08-12-2006',
                'tempat_lahir' => 'Palembang'
            ],
        ];
        
        $mahasiswa = $mahasiswaList[$id];
        return view('mhs.detail', compact('mahasiswa'));
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
        return view('mhs.delete', compact('id'));
    }
}