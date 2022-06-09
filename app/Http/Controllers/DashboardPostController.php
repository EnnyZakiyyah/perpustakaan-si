<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Category;
use Illuminate\Support\Str;
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
        return view('dashboard.sirkulasi.penelusuran-katalog.index', [
            'katalogs' => Katalog::all()
        ]);
        // return view('dashboard.sirkulasi.penelusuran-katalog.index', [
        //     'katalogs' => Katalog::where('user_id', auth()->user()->id)->get()
        // ]);
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
        //dd('categories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:katalogs',
            'category_id' => 'required',
            'body' => 'required',
            'penulis' => 'required|max:255',
            'edisi' => '',
            'isbn' => '',
            'penerbit' => '',
            'tahun_terbit' => '',
            'tempat_terbit' => '',
            'jumlah' => 'required',
            'bahasa' => '',
            'lokasi' => '',
        ]);

        $validateData['author_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Katalog::create($validateData);
        return redirect('/dashboard/sirkulasi/penelusuran-katalog')->with('success', 'New Katalog has been addedd!');
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
    public function edit(Katalog $katalog, $id)
    {
        $katalog_value = Katalog::find($id);
        return view('dashboard.sirkulasi.penelusuran-katalog.edit', [
            'katalog' => $katalog,
            'categories' => Category::all(),
            'katalog_value' => $katalog_value
        ]);
        // dd('$id');
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
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'penulis' => 'required|max:255',
            'edisi' => '',
            'isbn' => '',
            'penerbit' => '',
            'tahun_terbit' => '',
            'tempat_terbit' => '',
            'jumlah' => 'required',
            'bahasa' => '',
            'lokasi' => '',
        ];

        if($request->slug != $katalog->slug) {
            $rules['slug'] = 'unique:katalogs';
        }

        $validateData = $request->validate($rules);

        $validateData['author_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Katalog::where('id', $katalog->id)
            ->update($validateData);
        return redirect('/dashboard/sirkulasi/penelusuran-katalog')->with('success', 'Katalog has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Katalog::destroy($katalog->id);
        Katalog::findOrfail($id)->delete();
        return redirect('/dashboard/sirkulasi/penelusuran-katalog')->with('success', 'Katalog has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Katalog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
        // dd($slug);


    }
}
