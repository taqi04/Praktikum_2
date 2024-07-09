<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kabkotas;
use App\Models\Provinsis;
use Illuminate\Http\Request;

class KabkotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kabkotas = Kabkotas::all();
        return view('kabkotas.index',compact('list_kabkotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kabkotas = Kabkotas::all();
        $provinsis = Provinsis::all();
        return view('kabkotas.create',['kabkotas' =>$kabkotas,'provinsis'=>$provinsis]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|string',
            'latitude'=>'required|numeric',
            'longitude'=>'required|numeric',
            'provinsi_id'=>'required|integer'
                  
        ]);
        Kabkotas::create($validated);
        return redirect('kabkotas/index')->with('pesan', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kabkotas = Kabkotas::find($id);
        return view('kabkotas.show', compact('kabkotas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kabkotas = Kabkotas::find($id);
        return view('kabkotas.edit', compact('kabkotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required|string',
            'latitude'=>'required|numeric',
            'longitude'=>'required|numeric',
            'provinsi_id'=>'required|integer'
            
        ]);
        $kabkotas = Kabkotas::find($id);
        $kabkotas->update($validated);
        return redirect('kabkotas/index')->with('pesan','Data berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kabkotas = Kabkotas::find($id);
        $kabkotas->delete();
        return redirect('kabkotas/index')->with('pesan','Data berhasil di Hapus');
    }
}
