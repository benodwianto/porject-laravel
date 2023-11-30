<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('belis', [
            'title' => 'Beli',
            'barang' => Barang::latest()->filter(request(['cari', 'kategori']))->paginate(40)->withQueryString(),
        ]);
    }

    public function tampilan(Barang $barang)
    {
        return view('beli', [
            'title' => 'Beli',
            'barang' => $barang->load('kategori'),
        ]);
    }

    public function create()
    {
        return view('', []);
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
