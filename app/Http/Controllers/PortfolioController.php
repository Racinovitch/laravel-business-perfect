<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $dataPortfolio=Portfolio::all();
        
        return view('pages.portfolio', compact('dataPortfolio'));
    }
}
