<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DinnerOption;

class DinnerController extends Controller
{
    public function index()
    {
        // Fetch all dinner options from the database
        $options = DinnerOption::all();

        return view('index', compact('options'));
    }

    public function decide()
    {
        // Get a random dinner option
        $randomOption = DinnerOption::inRandomOrder()->first();

        return view('decide', compact('randomOption'));
    }
}

