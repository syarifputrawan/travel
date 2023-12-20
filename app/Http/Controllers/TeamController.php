<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function team()
    {
        $team = Team::all();
        return view('backend.team.table', compact('team'));
    }

    public function create()
    {
        return view('backend.team.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foto' => 'required',
            'nama' => 'required|string',
            'jabatan' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $foto = $request->file('foto');
        $path = Storage::putFile('/public/foto',$foto);

        $team = Team::create([
            'foto' => $path,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        if ($team) {
            return redirect()->to('/team')->withSuccess('data berhasil ditambah');
        } else {
            back()->withInput()->withErrors('data gagal ditambah');
        }
    }

    public function edit($id)
    {
        $team = Team::find($id);
        

        return view('backend.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        
        $team = Team::find($id);
        // dd($about);
        if ($request->hasFile('foto')) {
            if (Storage::get($team->foto)) {
                Storage::delete($team->foto);
            }
            $foto = $request->file('foto');
            $path = Storage::putFile('public/foto', $foto);
            $team->foto = $path;
        }
        $det = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ];

        $team->update($det);

        if ($team) {
            return redirect()->to('/team')->withSuccess('Berhasil Update');
        } else {
            return back()->withInput()->withErrors('Gagal Update');
        };
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        
        if(Storage::get($team->foto)){
            Storage::delete($team->foto);
        }

        $team->delete();
        
        if ($team) {
            return back()->withSuccess('data berhasil dihapus');
        } else {
            back()->withErrors('data gagal dihapus');
        }
    }

}
