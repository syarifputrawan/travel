<?php

namespace App\Http\Controllers;

use App\Models\Treveling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TrevelingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function treveling()
    {
        $treveling = Treveling::all();
        return view('backend.treveling.table', compact('treveling'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            return view('backend.treveling.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'nama_tempat' => 'required|string',
            'penjelasan_singkat' => 'required|string',
            'harga' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $gambar = $request->file('gambar');
        $path = Storage::putFile('/public/gambar_treveling',$gambar);

        $treveling = Treveling::create([
            'gambar' => $path,
            'nama_tempat' => $request->nama_tempat,
            'penjelasan_singkat' => $request->penjelasan_singkat,
            'harga' => $request->harga
        ]);

        if ($treveling) {
            return redirect()->to('/treveling')->withSuccess('data berhasil ditambah');
        } else {
            back()->withInput()->withErrors('data gagal ditambah');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
        {
            $treveling = Treveling::find($id);
            return view('backend.treveling.edit', compact('treveling'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $treveling = Treveling::find($id);
        // dd($about);
        if ($request->hasFile('gambar')) {
            if (Storage::get($treveling->gambar)) {
                Storage::delete($treveling->gambar);
            }
            $gambar = $request->file('gambar');
            $path = Storage::putFile('public/gambar_treveling', $gambar);
            $treveling->gambar = $path;
        }
        $det = [
            'nama_tempat' => $request->nama_tempat,
            'penjelasan_singkat' => $request->penjelasan_singkat,
            'harga' => $request->harga
        ];

        $treveling->update($det);

        if ($treveling) {
            return redirect()->to('/treveling')->withSuccess('Berhasil Update');
        } else {
            return back()->withInput()->withErrors('Gagal Update');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treveling = Treveling::find($id);
        
        if(Storage::get($treveling->gambar)){
            Storage::delete($treveling->gambar);
        }

        $treveling->delete();
        
        if ($treveling) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }
}
