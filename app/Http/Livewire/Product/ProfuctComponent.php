<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfuctComponent extends Component
{
    public function render()
    {
        
        $user = null;
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
        }
        return view('livewire.product.profuct-component')->layout('layouts.product',['user'=>$user]);
    }
}
