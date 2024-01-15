<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rndItem = Item::inRandomOrder()->limit(1)->get();
        $rndType = Type::inRandomOrder()->limit(1)->get();
        $rndCharacter = Character::inRandomOrder()->limit(1)->get();
        $data = [
            'item' => $rndItem,
            'type' => $rndType,
            'character' => $rndCharacter,
        ];
        return view('home',compact('data'));
    }
}
