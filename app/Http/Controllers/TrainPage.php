<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainPage extends Controller
{
    public function index()
    {
        $trains = train::all();
        $dati = [
            'trains' => $trains
        ];
        return view('trains', $dati);
    }
}
