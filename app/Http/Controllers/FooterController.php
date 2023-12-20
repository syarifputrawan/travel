<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function view_kontak()
    {
        $footer = Footer::all();
        return view('backend.footer.table', compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::find($id);
        

        return view('backend.footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'alamat' => '|string',
            'nomor_hp' => '|string',
            'email' => '|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $footer = Footer::find($id)->update([
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
        ]);

        if ($footer) {
            return redirect()->to('/footer')->withSuccess('data berhasil diubah');
        } else {
            back()->withInput()->withErrors('data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $footer = footer::find($id)->delete();
        if ($footer) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }

}
