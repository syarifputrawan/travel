<?php

namespace App\Http\Controllers;

use App\Models\Perkenalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PerkenalanController extends Controller
{
    public function perkenalan()
    {
        $perkenalan = Perkenalan::all();
        return view('backend.perkenalan.table', compact('perkenalan'));
    }

    public function create()
    {
        return view('backend.perkenalan.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'judul_singkat' => 'required|string',
            'penjelasan_singkat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $gambar = $request->file('gambar');
        $path = Storage::putFile('/public/gambar_perkenalan',$gambar);

        $perkenalan = Perkenalan::create([
            'gambar' => $path,
            'judul_singkat' => $request->judul_singkat,
            'penjelasan_singkat' => $request->penjelasan_singkat
        ]);

        if ($perkenalan) {
            return redirect()->to('/perkenalan')->withSuccess('data berhasil ditambah');
        } else {
            back()->withInput()->withErrors('data gagal ditambah');
        }
    }

    public function edit($id)
    {
        $perkenalan = Perkenalan::find($id);
        

        return view('backend.perkenalan.edit', compact('perkenalan'));
    }

    public function update(Request $request, $id)
    {
        
        $perkenalan = Perkenalan::find($id);
        // dd($about);
        if ($request->hasFile('gambar')) {
            if (Storage::get($perkenalan->gambar)) {
                Storage::delete($perkenalan->gambar);
            }
            $gambar = $request->file('gambar');
            $path = Storage::putFile('public/gambar', $gambar);
            $perkenalan->gambar = $path;
        }
        $det = [
            'judul_singkat' => $request->judul_singkat,
            'penjelasan_singkat' => $request->penjelasan_singkat,
        ];

        $perkenalan->update($det);

        if ($perkenalan) {
            return redirect()->to('/perkenalan')->withSuccess('Berhasil Update');
        } else {
            return back()->withInput()->withErrors('Gagal Update');
        };
    }

    public function destroy($id)
    {
        $perkenalan = Perkenalan::find($id);
        
        if(Storage::get($perkenalan->gambar)){
            Storage::delete($perkenalan->gambar);
        }

        $perkenalan->delete();
        
        if ($perkenalan) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }
}
