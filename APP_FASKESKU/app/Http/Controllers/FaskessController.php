<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faskess;
use App\Models\Jenis_faskess;
use App\Models\Kabkotas;
use App\Models\Kategoris;
use Illuminate\Http\Request;

class FaskessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // dd('index method called');
    $list_faskess = Faskess::all();
    return view('faskess.index', compact('list_faskess'));
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $kabkotas = Kabkotas::all();
    $jenis_faskess = Jenis_faskess::all();
    $kategoris = Kategoris::all();
    return view('faskess.create', [
        'kabkotas' => $kabkotas,
        'jenis_faskess' => $jenis_faskess,
        'kategoris' => $kategoris
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'nama_pengelola' => 'required|string',
            'alamat' => 'required|string',
            'website' => 'required|string',
            'email' => 'required|string|email',
            'kabkota_id' => 'required|integer',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|integer',
            'kategori_id' => 'required|integer'
        ]);
    
        Faskess::create($validated);
        return redirect()->route('faskess.index')->with('pesan', 'Data berhasil ditambah');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faskess = Faskess::find($id);
        return view('faskess.show', compact('faskess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faskess = Faskess::find($id);
        return view('faskess.edit', compact('faskess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required|string',
            'nama_pengelola'=> 'required|string',
            'alamat'=> 'required|string',
            'website'=> 'required|string',
            'email'=> 'required|string',
            'kabkota_id'=> 'required|integer',
            'rating'=> 'required|integer',
            'latitude'=> 'required|numeric',
            'longitude'=> 'required|numeric',
            'jenis_faskes_id'=> 'required|integer',
            'kategori_id'=> 'required|integer'               
        ]);
        $faskess = Faskess::find($id);
        $faskess->update($validated);
        return redirect('faskess/index')->with('pesan','Data berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faskess = Faskess::find($id);
        $faskess->delete();
        return redirect('faskess/index')->with('pesan','Data berhasil di Hapus');
    }
}
