<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('home',[
            'spareparts' => $spareparts
        ]);
    }
}
