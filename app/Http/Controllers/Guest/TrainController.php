<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();
        // $trains = Train::where('departure_time' > '2024-02-02 00:00:00');
        return view('guest.train.index', ['trains' => $trains]);
    }
}
