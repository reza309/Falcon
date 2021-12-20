<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class ProfuctComponent extends Component
{
    public function render()
    {
        return view('livewire.product.profuct-component')->layout('layouts.product');
    }
}
