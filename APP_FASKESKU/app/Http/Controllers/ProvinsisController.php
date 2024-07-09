<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Provinsis;

class ProvinsisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $list_provinsis = Provinsis::all();
        return view('provinsis.index',compact('list_provinsis'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsis = Provinsis::all();
        return view('provinsis.create', compact('provinsis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|string',
            'ibukota'=> 'required|string',
            'latitude'=> 'required|numeric',
            'longitude'=> 'required|numeric'
                  
        ]);
        Provinsis::create($validated);
        return redirect('provinsis/index')->with('pesan', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provinsis = Provinsis::find($id);
        return view('provinsis.show', compact('provinsis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinsis = Provinsis::find($id);
        return view('provinsis.edit', compact('provinsis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=> 'required|string',
            'ibukota'=> 'required|string',
            'latitude'=> 'required|numeric',
            'longitude'=> 'required|numeric'
        ]);
        $provinsis = Provinsis::find($id);
        $provinsis->update($validated);
        return redirect('provinsis/index')->with('pesan','Data berhasil di perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provinsis = Provinsis::find($id);
        $provinsis->delete();
        return redirect('provinsis/index')->with('pesan','Data berhasil di Hapus');
    }
}
