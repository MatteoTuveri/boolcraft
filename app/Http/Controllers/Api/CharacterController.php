<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    //
    public function index(Request $request){

        //$characters = Character::all();
        $characters = Character::with(['items','type'])->get();
        return response()->json([
            'success' => true,
            'data' => $characters
        ]);
    }
    public function show($id){
        $character = Character::where('id', $id)->first();
        return response()->json([
            'success' => true,
            'data' => $character
        ]);
    }
}
