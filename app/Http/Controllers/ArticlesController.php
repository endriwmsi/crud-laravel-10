<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::all();
        return view('articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->input('title');
        $request->input('text');
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        Articles::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);
    
        return redirect()->route('articles.index');
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
        $articles = Articles::find($id);
        return view('articles.edit', ['articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articles = Articles::findOrFail($id);
        $articles->title = $request->input('title');
        $articles->text = $request->input('text');
        $articles->save();

        return redirect()->route('articles.index', $articles->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articles = Articles::findOrFail($id);
        $articles->delete();

        return redirect()->route('articles.index');
    }
}
