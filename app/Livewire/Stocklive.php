<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;

class Stocklive extends Component
{
    public $search = '';

    public function render()
    {
        if($this->search == ''){
            $stock = Item::all();
        } else {
            $stock = Item::whereAny(['name','description','position'], 'LIKE', '%'.$this->search.'%')->get();
        }

        return view('livewire.stocklive',compact('stock'));
    }
}
