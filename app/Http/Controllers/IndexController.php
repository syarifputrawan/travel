<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Perkenalan;
use App\Models\Sedikit;
use App\Models\Team;
use App\Models\Treveling;
use App\Models\View_kontak;
use GuzzleHttp\Psr7\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'about' => About::all(),
            'perkenalan' => Perkenalan::all(),
            'sedikit' => Sedikit::first(),
            'treveling' => Treveling::all(),
            'view_kontak' => View_kontak::first(),
            'footer' => Footer::first(),
        ];
        $perkenalan1 = Perkenalan::first();
        $perkenalan2 = Perkenalan::latest()->take(4)->get();
        return view('frontend.index', $data,compact('perkenalan1','perkenalan2'));
    }

    public function about()
    {
        $data = [
            'about' => About::all(),
            'team' => Team::all(),
            'footer' => Footer::first(),
        ];
        return view('frontend.about', $data);
    }

    public function contact()
    {
        $data = [
            'about' => About::all(),
            'team' => Team::all(),
            'footer' => Footer::first(),
        ];
        return view('frontend.contact', $data);
    }

    public function services()
    {
        $data = [
            'about' => About::all(),
            'team' => Team::all(),
            'footer' => Footer::first(),
        ];
        return view('frontend.services', $data);
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
        //
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
