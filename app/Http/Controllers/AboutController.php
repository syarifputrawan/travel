<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::all();
        return view('backend.about.table', compact('about'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required',
            'deskripsi_singkat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $gambar = $request->file('gambar');
        $path = Storage::putFile('/public/gambar',$gambar);

        $about = About::create([
            'gambar' => $path,
            'deskripsi_singkat' => $request->deskripsi_singkat
        ]);

        if ($about) {
            return redirect()->to('/about')->withSuccess('data berhasil ditambah');
        } else {
            back()->withInput()->withErrors('data gagal ditambah');
        }
    }

    public function edit($id)
    {
        $about = About::find($id);
        

        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        
        $about = About::find($id);
        // dd($about);
        if ($request->hasFile('gambar')) {
            if (Storage::get($about->gambar)) {
                Storage::delete($about->gambar);
            }
            $gambar = $request->file('gambar');
            $path = Storage::putFile('public/gambar', $gambar);
            $about->gambar = $path;
        }
        $det = [
            'deskripsi_singkat' => $request->deskripsi_singkat,
        ];

        $about->update($det);

        if ($about) {
            return redirect()->to('/about')->withSuccess('Berhasil Update');
        } else {
            return back()->withInput()->withErrors('Gagal Update');
        };
    }

    public function destroy($id)
    {
        $about = About::find($id);
        
        if(Storage::get($about->gambar)){
            Storage::delete($about->gambar);
        }

        $about->delete();
        
        if ($about) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }

}
