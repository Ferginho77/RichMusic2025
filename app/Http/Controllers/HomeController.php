<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
{
    // Hitung total artikel berdasarkan tipe
    $totalArtikel = DB::table('articles')->count();
    $totalEvent = DB::table('articles')->where('Tipe', 'Event')->count();
    $totalEksklusif = DB::table('articles')->where('Tipe', 'Eksklusif')->count();
    $totalHotnews = DB::table('articles')->where('Tipe', 'Hotnews')->count();

    // Ambil data artikel untuk modal
    $events = Article::where('Tipe', 'Event')->get();
    $eksklusif = Article::where('Tipe', 'Eksklusif')->get();
    $Hotnews = Article::where('Tipe', 'Hotnews')->get();

    // Kirim semua data ke view
    return view('home', [
        'totalArtikel' => $totalArtikel,
        'totalEvent' => $totalEvent,
        'totalEksklusif' => $totalEksklusif,
        'totalHotnews' => $totalHotnews,
        'events' => $events,
        'eksklusif' => $eksklusif,
        'Hotnews' => $Hotnews,
    ]);
}


    
    public function TambahArtikel(Request $request)
    {
         
       $request->validate([
    'title' => 'required',
    'deskripsi' => 'required',
    'link' => 'required',
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

}
