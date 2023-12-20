<?php

namespace App\Http\Controllers;

use App\Models\View_kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class View_kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view_kontak()
    {
        $view_kontak = View_kontak::all();
        return view('backend.view_kontak.table', compact('view_kontak'));
    }

    public function edit($id)
    {
        $view_kontak = View_kontak::find($id);
        

        return view('backend.view_kontak.edit', compact('view_kontak'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_sambutan' => '|string',
            'penjelasan_view' => '|string',
            'penjelasan_treveling' => '|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $view_kontak = View_kontak::find($id)->update([
            'judul_sambutan' => $request->judul_sambutan,
            'penjelasan_view' => $request->penjelasan_view,
            'penjelasan_treveling' => $request->penjelasan_treveling,
        ]);

        if ($view_kontak) {
            return redirect()->to('/view_kontak')->withSuccess('data berhasil diubah');
        } else {
            back()->withInput()->withErrors('data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $view_kontak = View_kontak::find($id)->delete();
        if ($view_kontak) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }

}
