<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
   
    public function TambahArtikel(Request $request)
    {

            $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'link' => 'url',
            'FotoContent' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Tipe' => 'required|in:Event,Hotnews,Eksklusif',
        ]);


        DB::transaction(function () use ($request) {
            $FotoContent = null;

            if ($request->hasFile('FotoContent')) {
                $file = $request->file('FotoContent');
                $FotoContent = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('img'), $FotoContent);
            }

            Article::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'FotoContent' => $FotoContent,
                'Tipe' => $request->Tipe,
            ]);
        });   
    
        return redirect()->route('home')->with('success', 'Artikel berhasil ditambahkan!');


    }

    public function HapusArtikel($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('home')->with('success', 'Artikel berhasil dihapus!');
    }

    
}
