<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cart(Request $request){
        $carts = Cart::where('user_id', auth()->id())->get();

        $cartall = Cart::sum('subtotal');
        return view('pages.cart-page', compact('carts','cartall'));
    }

    public function addtocart(Product $product,Request $request){
        if(Auth::check()){
            $product = Product::find($request->product_id);
            $cartItem = Cart::where('user_id', auth()->id())
                        ->where('product_id', $product->id)
                        ->first();
            
            if ($cartItem) {
                $cartItem->quantity += 1;
                $subtotal = $product->price*$cartItem->quantity;
                $cartItem->subtotal = $subtotal;
                $cartItem->save();
            } else {
                $qty = 1;
                $subtotal = $product->price*$qty;
                Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $product->id,
                    'quantity' => $qty,
                    'price' => $product->price,
                    'subtotal' => $subtotal
                ]);
            }
            return redirect()->route('cart')->with('success', 'Item added to cart.');
        }else{
            return redirect()->route('login');
        }
        
    }
    public function updateCart(Request $request,$id)
    {
        $product = Product::find($id);
        $cartid = Cart::find($id);
        $cartid->subtotal = $request->quantity*$cartid->product->price;
        $res = $cartid->update($request->all());
        
        if($res){
            session()->flash('success', 'Item Cart is Updated Successfully !');
            return redirect()->route('cart');
        } else{
            dd($res);
        }
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart')->with('success','user deleted successfully');
    }
    
    // public function clearAllCart()
    // {
    //     Cart::clear();
    //     session()->flash('success', 'All Item Cart Clear Successfully !');
    //     return redirect()->route('cart.list');
    // }
    
    // public function cartloadbyajax()
    // {
    //     if(Cookie::get('shopping_cart'))
    //     {
    //         $cookie_data = stripslashes(Cookie::get('shopping_cart'));
    //         $cart_data = json_decode($cookie_data, true);
    //         $totalcart = count($cart_data);

    //         echo json_encode(array('totalcart' => $totalcart)); die;
    //         return;
    //     }
    //     else
    //     {
    //         $totalcart = "0";
    //         echo json_encode(array('totalcart' => $totalcart)); die;
    //         return;
    //     }
    // }

    public function count(Request $request, Closure $next)
    {
        $count = Cart::where('user_id', auth()->id())->count();

        return response()->json(['count' => $count]);

        $user = Auth::user();
        if($user->role === 'admin'){
            return redirect('/admin');
        } elseif($user->role === 'user'){
            return redirect('/user');
        }
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update([
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('cart')->with('success', 'Cart item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::destroy($id);

        return redirect()->route('cart')->with('success', 'Cart item removed successfully.');
    }
}
