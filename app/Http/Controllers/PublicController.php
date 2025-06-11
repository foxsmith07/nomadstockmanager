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
        //? WIDGET
        $item_count = Item::all()->count();
        $esauriti_count = Item::where('quantity_stock',0)->count();
        $ordinati_count = Item::where('quantity_ordered','>',0)->count();
        $arrivo_count = Item::where('quantity_shipped','>',0)->count();

        //? COLLECTIONS
        $esauriti = Item::where('quantity_stock',0)->get();
        $ordinati = Item::where('quantity_ordered','>',0)->get();
        $arrivo = Item::where('quantity_shipped','>',0)->get();

        
        return view('pages.dashboard', compact('item_count','esauriti_count','ordinati_count','arrivo_count','esauriti','ordinati','arrivo'));
    }

    public function orders(){
        return view('pages.orders');
    }

}
