<?php

namespace App\Http\Controllers;

use App\CEO;
use App\Http\Requests\StoreCEO;
use Illuminate\Http\Request;

class CEOController extends Controller
{

//    public function __construct()
//    {
//       $this->middleware('auth');
//    }

    public function index(Request $request)
    {
        $numPerPage = 10;
        $term = $request->term;
        if ($term != '') {
            $ceos = CEO::where('name', 'LIKE', "%{$term}%")
                ->orWhere('company_name', 'LIKE', "%{$term}%")
                ->paginate($numPerPage);
            $ceos->appends(['term' => $term]);
        } else {
            $ceos = CEO::paginate($numPerPage);
        }

        return view('ceo.index', compact('ceos', 'term'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $ceos = CEO::paginate(10);
        return view('ceo.index', compact('ceos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = [];
        $thisYear = date('Y');
        $years = range(1970, $thisYear + 2);
        return view('ceo.create', compact('industries', 'years', 'thisYear'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCEO $request)
    {
        $validated = $request->validated();
        CEO::create($validated);
        return redirect(route('ceo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ceo = CEO::find($id);
        return view('ceo.show', compact('ceo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industries = [];
        $thisYear = date('Y');
        $years = range(1970, $thisYear + 2);
        $ceo = CEO::find($id);
        return view('ceo.edit', compact('industries', 'years', 'ceo', 'thisYear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreCEO  $request
     * @param  CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCEO $request, CEO $ceo)
    {
        $ceo->update($request->all());

        return redirect()->route('ceo.index')
            ->with('success', 'CEO updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CEO $ceo)
    {
        $ceo->delete();

        return redirect()->route('ceo.index')
            ->with('success', 'CEO deleted successfully');
    }
}
