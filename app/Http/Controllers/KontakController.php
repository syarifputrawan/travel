<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string',
                'email' => 'required|string',
                'judul' => 'required|string',
                'pesan' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator->messages());
            }
    
            $kontak = Kontak::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'judul' => $request->judul,
                'pesan' => $request->pesan,
            ]);
    
            // dd($detail);
    
            if ($kontak) {
                return redirect()->to('/contact')->withSuccess('anda berhasil mengirim pesan');
            } else {
                back()->withInput()->withErrors('pesan gagal');
            }
        
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
