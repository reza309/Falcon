<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function render()
    {
        $user = null;
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
        }
        return view('livewire.cart-component')->layout('layouts.product',['user'=>$user]);
    }
}
