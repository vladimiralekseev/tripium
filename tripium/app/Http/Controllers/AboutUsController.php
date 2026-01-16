<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AboutUsController extends Controller
{
    public function index(): View|Factory
    {
        return view('about-us');
    }
}
