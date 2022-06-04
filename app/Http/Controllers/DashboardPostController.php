<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $katalogs = Katalog::where('user_id', auth()->user()->id)->get();
        // $try = Katalog::where('user_id', auth()->user()->id)->get();

        // return view('dashboard.koleksi-digital.index', [
        //     'katalogs' => Katalog::where('user_id', auth()->user()->id)->get()
        // ]);
        return view('dashboard.sirkulasi.penelusuran-katalog.index', [
            'katalogs' => Katalog::where('user_id', auth()->user()->id)->get()
        ]);


        // dd($katalogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sirkulasi.penelusuran-katalog.create', [
            'categories' => Category::all()
        ]);
        dd('categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function show(Katalog $katalog)
    {
        // $katalog = Katalog::all();
        return view('dashboard.sirkulasi.penelusuran-katalog.show', [
            'katalogs' => Katalog::all()
        ]);
        // dd ($katalog);

        // $katalog = Katalog::all();
        // return view('dashboard.sirkulasi.penelusuran-katalog.show', compact('katalog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Katalog $katalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katalog $katalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katalog $katalog)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Katalog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
        // dd($slug);

        
    }
}
