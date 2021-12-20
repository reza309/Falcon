<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class ProfuctComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.product.profuct-component')->layout('layouts.product',['user'=>$user]);
    }
}
