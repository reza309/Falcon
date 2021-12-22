<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\WithPagination;
use Cart;
class ProfuctComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('Total Payable Ammount');
    }
    public function render()
    {
        
        $user = null;
        if(Auth::check()){
            $user = User::find(Auth::user()->id);
        }
        $products = Product::paginate(12);
        return view('livewire.product.profuct-component',['products'=>$products])->layout('layouts.product',['user'=>$user]);
    }
}
