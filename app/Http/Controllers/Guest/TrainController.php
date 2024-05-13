<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;


class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $today = Date::now()->toDateString();

        $trains = Train::whereDate('date',  $today)
            ->orderBy('Orario_di_partenza')
            ->get();

        return view('guests.index', compact('trains', 'today'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        return view('guests.show', compact('train'));
    }
}
