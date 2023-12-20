<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Booking;
use App\Models\Footer;
use App\Models\Invoice;
use App\Models\Paket;
use App\Models\Perkenalan;
use App\Models\Sedikit;
use App\Models\Treveling;
use App\Models\View_kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function booking(string $id)
    {

        // dd($id);
        $data = [

            // 'about' => About::all(),
            // 'perkenalan' => Perkenalan::all(),
            'paket' => Paket::all(),
            'treveling' => Treveling::find($id), 
            // 'view_kontak' => View_kontak::first(),
            'footer' => Footer::first(),
        ];
        // $perkenalan1 = Perkenalan::first();
        // $perkenalan2 = Perkenalan::latest()->take(4)->get();
        return view('frontend.booking', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
            $validator = Validator::make($request->all(), [
                'nama' => 'required|string',
                // 'destinasi' => 'required|string',
                'paket' => 'required|string',
                'durasi' => 'required|string',
                'tanggal' => 'required|date',
                'total' => 'required|string',
            ]);

            
            // dd($request);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator->messages());
            }
    
            $invoice = Invoice::create([
                'nama' => $request->nama,
                'destinasi' => $request->destinasi,
                'paket' => $request->paket,
                'durasi' => $request->durasi,
                'tanggal' => $request->tanggal,
                'total' => $request->total,
            ]);
    
            // dd($detail);
            // dd($invoice);
            
            if ($invoice) {
                return redirect()->to('/invoice')->withSuccess('anda berhasil check out ');
            } else {
                back()->withInput()->withErrors('check out  gagal');
            }
    }
}
