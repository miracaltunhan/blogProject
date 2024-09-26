<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Modelinizi buraya ekleyin

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all(); // Tüm haberleri al
        return view('adminPanel.layout.news', compact('news'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            // Görsel yükleme işlemi
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
            }

            News::create([
                'title' => $request->title,
                'content' => request('content'),
                'image' => $imagePath,
            ]);
            return redirect()->route('news.index')->with('success', 'Haber başarıyla eklendi.');

        }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);

        // View'e gönder
        return view('adminPanel.layout.news-single', compact('news'));    }

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
