<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class adsController extends Controller
{

    public function index()
    {

        //ilanlar listelenecek

        return view('pages.advertisements');

    }
    public function create()
    {
        return view('pages.salepage');

    }
    public function postAds(Request $request){




    }

}
