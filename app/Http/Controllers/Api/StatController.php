<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $score_data= $request->all();
        //dd($score_data);
        $validator= Validator::make($score_data,[
            'name'=>'required',
            'score'=>'required',
            
        ]);
        if ($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors'=> $validator->errors()
            ]);
        };
        $new_stat = new Stat();
        $new_stat->fill($score_data);
        $new_stat->save();

        return response()->json([
            'success'=>true,
            'results'=>$new_stat
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stat $stat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stat $stat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stat $stat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stat $stat)
    {
        //
    }
}
