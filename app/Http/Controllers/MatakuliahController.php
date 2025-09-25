<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Selamat datang di halaman mata kuliah";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Form untuk menambah mata kuliah baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Data mata kuliah baru telah disimpan";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $param1)
    {
        if ($param1 == 'ST445'){
        return "data matakuliah : " . $param1;
        } else {
        return "MASUKKAN KODE MATA KULIAH!";
        }
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $param1)
    {
        return "Form untuk mengedit mata kuliah dengan id : " . $param1;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $param1)
    {
        return "Data mata kuliah dengan id : " . $param1 . " telah diupdate";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $param1)
    {
        return "Data mata kuliah dengan id : " . $param1 . " telah dihapus";
    }
}
