<?php

namespace App\Http\Controllers;

use App\Models\Sedikit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSedikitRequest;
use App\Http\Requests\UpdateSedikitRequest;
use Illuminate\Support\Facades\Storage;

class SedikitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sedikit()
    {
        $sedikit = Sedikit::all();
        return view('backend.sedikit.table', compact('sedikit'));
    }

    public function edit(string $id)
        {
            $sedikit = Sedikit::find($id);
            return view('backend.sedikit.edit', compact('sedikit'));
        }

        public function update(Request $request, string $id)
        {
            $sedikit = Sedikit::find($id);
            // dd($about);
            if ($request->hasFile('gambar')) {
                if (Storage::get($sedikit->gambar)) {
                    Storage::delete($sedikit->gambar);
                }
                $gambar = $request->file('gambar');
                $path = Storage::putFile('public/gambar_sedikit', $gambar);
                $sedikit->gambar = $path;
            }
            $det = [
                'judul_kami' => $request->judul_kami,
                'deskripsi_singkat' => $request->deskripsi_singkat,
            ];
    
            $sedikit->update($det);
    
            if ($sedikit) {
                return redirect()->to('/sedikit')->withSuccess('Berhasil Update');
            } else {
                return back()->withInput()->withErrors('Gagal Update');
            };
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $sedikit = sedikit::find($id);
            
            if(Storage::get($sedikit->gambar)){
                Storage::delete($sedikit->gambar);
            }
    
            $sedikit->delete();
            
            if ($sedikit) {
                return back()->withSuccess('data berhasil dihapus');
            } else {
                back()->withErrors('data gagal dihapus');
            }
        }
}
