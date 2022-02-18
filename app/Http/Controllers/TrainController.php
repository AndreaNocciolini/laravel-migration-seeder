<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;
use Illuminate\Http\Request;

// class TrainController extends Controller
// {
//     public function index()
//     {
//         $trains = Train::all();
//         $data = ['trains' => $trains];
//         return view('home', $data);
//     }
// }

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('Data', '>=', Carbon::today()->toDateString())->get();
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}
