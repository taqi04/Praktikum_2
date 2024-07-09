<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jenis_faskess;

class Jenis_faskessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jenis_faskess = Jenis_faskess::all();
        return view('jenis_faskess.index', compact('list_jenis_faskess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        
            return view('jenis_faskess.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|string'
            
                  
        ]);
        Jenis_faskess::create($validated);
        return redirect('jenis_faskess/index')->with('pesan', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis_faskess = Jenis_faskess::find($id);
        return view('jenis_faskess.show', compact('jenis_faskess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis_faskess = Jenis_faskess::find($id);
        return view('jenis_faskess.edit', compact('jenis_faskess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required|string'
            
        ]);
        $jenis_faskess = Jenis_faskess::find($id);
        $jenis_faskess->update($validated);
        return redirect('jenis_faskess/index')->with('pesan','Data berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis_faskess = Jenis_faskess::find($id);
        $jenis_faskess->delete();
        return redirect('jenis_faskess/index')->with('pesan','Data berhasil di Hapus');
    }
}
