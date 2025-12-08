<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class temansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dta = DB::table('temans')->get();
        return view('temans.index',compact('dta')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'noTelp' => 'required'
        ]);

        // insert data
        DB::table('temans')->insert([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'kota'   => $request->kota,
            'noTelp' => $request->noTelp,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/teman')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dta = DB::table('temans')->where('id',$id)->first();
        return view('temans.edit',compact('dta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'noTelp' => 'required'
        ]);
        
        // update
        DB::table('temans')->where('id',$id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'noTelp' => $request->noTelp,
            'updated_at' => now(),
        ]);

        return redirect('/teman')->with('success', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
