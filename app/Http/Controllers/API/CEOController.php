<?php

namespace App\Http\Controllers\API;

use App\CEO;
use App\Http\Controllers\Controller;
use App\Http\Resources\CEOResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CEOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ceos = CEO::all();
        return response([
            'ceos' => CEOResource::collection($ceos),
            'message' => 'Retrieved Successfully',
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data,
            [
                'name' => 'required|max:255',
                'year' => 'required|max:4|min:4',
                'company_headquarters' => 'required|max:255',
                'what_company_does' => 'required',
            ]);

        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(), "Validation Error",
            ]);
        }

        $ceo = CEO::create($data);

        return response([
            'ceo' => new CEOResource($ceo),
            'message' => 'Created Successfully',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function show(CEO $ceo)
    {
        return response([
            'ceo' => new CEOResource($ceo),
            'message' => 'Retrieved Successfully',
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CEO $ceo)
    {
        $ceo->update($request->all());

        return response([
            'ceo' => new CEOResource($ceo),
            'message' => 'Updated successfully',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CEO $ceo)
    {
        $ceo->delete();

        return response([
            'message' => 'Deleted',
        ]);
    }
}
