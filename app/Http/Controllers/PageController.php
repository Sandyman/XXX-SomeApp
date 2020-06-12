<?php

namespace App\Http\Controllers;

use App\Http\Resources\Inspirational;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quote = new Inspirational();
        return view('pages.index', compact('quote'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $quote = new Inspirational();
        return view('pages.about', compact('quote'));
    }

}
