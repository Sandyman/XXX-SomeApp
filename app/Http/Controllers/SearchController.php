<?php

namespace App\Http\Controllers;

use App\Industry;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $search = $request->searchText;
        $data = Industry::select("name")
            ->where("name","LIKE","%{$search}%")
            ->get();

        return response()->json($data);
    }

}
