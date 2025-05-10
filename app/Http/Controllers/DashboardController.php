<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
     public function TampilEvent()
    {
        $events = Article::where('Tipe', 'Event')->get();
        $eksklusif = Article::where('Tipe', 'Eksklusif')->get();
        $Hotnews = Article::where('Tipe', 'Hotnews')->get();
        return view('dashboard', compact('events', 'eksklusif', 'Hotnews'));
    }
    
}
