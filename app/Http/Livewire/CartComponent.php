<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cart;
class CartComponent extends Component
{
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        Session()->flash('success_message','Item has been removed');
    }
    public function render()
    {
        $user = null;
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
        }
        return view('livewire.cart-component')->layout('layouts.product',['user'=>$user]);
    }
}
