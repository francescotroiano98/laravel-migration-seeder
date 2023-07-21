<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // Grazie a questa funzione di laravel riesco a ottenere la data di oggi
        $today = now()->format('Y-m-d');

        // Grazie a questo riesco a ottenere i treni in partenza per oggi
        $trainsToday = Train::whereDate('Orario_di_partenza', $today)->get();

        return view('guest.train.index', compact('trainsToday'));
    }
}
