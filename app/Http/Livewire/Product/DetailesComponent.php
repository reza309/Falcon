<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DetailesComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $user = null;
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
        }
        return view('livewire.product.detailes-component',['product'=>$product])->layout('layouts.product',['user'=>$user]);
    }
}
