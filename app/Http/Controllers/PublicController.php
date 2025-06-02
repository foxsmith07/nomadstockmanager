<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $last_movement = Item::orderBy('updated_at','desc')->take(5)->get();
        return view('pages.dashboard', compact('last_movement'));
    }

    public function orders(){
        return view('pages.orders');
    }

}
