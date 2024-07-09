<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoris;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kategoris = Kategoris::all();
        return view('kategoris.index', compact('list_kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategoris::all();
        return view('kategoris.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|string'
            
                  
        ]);
        Kategoris::create($validated);
        return redirect('kategoris/index')->with('pesan', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategoris = Kategoris::find($id);
        return view('kategoris.show', compact('kategoris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = Kategoris::find($id);
        return view('kategoris.edit', compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required|string'
            
        ]);
        $kategoris = Kategoris::find($id);
        $kategoris->update($validated);
        return redirect('kategoris/index')->with('pesan','Data berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoris = Kategoris::find($id);
        $kategoris->delete();
        return redirect('kategoris/index')->with('pesan','Data berhasil di Hapus');
    }
}
