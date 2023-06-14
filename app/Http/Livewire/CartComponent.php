<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{

    public $cart;
    // public $items = [];
    // public function incrementQuantity($index)
    // {
    //     $this->items[$index]['quantity']++;
    //     $this->recalculateTotal();
    // }

    // public function decrementQuantity($index)
    // {
    //     if ($this->items[$index]['quantity'] > 1) {
    //         $this->items[$index]['quantity']--;
    //         $this->recalculateTotal();
    //     }
    // }

    // public function removeProduct($index)
    // {
    //     unset($this->items[$index]);
    //     $this->items = array_values($this->items);
    //     $this->recalculateTotal();
    // }

    // public function recalculateTotal()
    // {
    //     $subtotal = 0;

    //     foreach ($this->items as $item) {
    //         $subtotal += $item['price'] * $item['quantity'];
    //     }

    //     $this->total = $subtotal;
    // }
    public function updatedSelectedOption($value)
    {
        // Perform any logic you want based on the selected option value
        // For example, you can reload data, fetch new content, or update the page
        
        $this->emit('refreshPage'); // Emit an event to trigger a page refresh
    }

    public function incQuanitity($id){
        $cart = Cart::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if($cart){
            $cart->increment('quanitity');
        }else{

        }
        // $qty = $cart->quantity + 1;
        // Cart::update($id,$qty);
    }
    public function decQuanitity($id){
        $cart = Cart::where('id',$id)->where('user_id',auth()->user()->id)->first();
        if($cart){
            $cart->decrement('quanitity');
        }else{

        }
        // $qty = $cart->quantity - 1;
        // Cart::update($id,$qty);
    }
    public function render()
    {
        $this->cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.cart-component',[
            'cart' => $this->cart,
        ]);
    }
}