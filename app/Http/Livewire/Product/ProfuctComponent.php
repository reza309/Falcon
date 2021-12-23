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
        if(Cart::count() > 0)
        {
            
            foreach(Cart::content() as $item)
            {
                if($product_id == $item->id)
                {
                    session()->flash('exist_message','Item Already in cart');
                    break;
                    
                }else{
                    Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
                    session()->flash('success_message','Item added in cart');
                    return redirect()->route('product.cart');
                }
            }
        }else{
            Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
            session()->flash('success_message','Item added in cart');
            return redirect()->route('product.cart');
        }
        
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
