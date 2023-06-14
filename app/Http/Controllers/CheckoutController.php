<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Cart::with('product')->where('user_id', auth()->id())->get();
        $cartItems = Cart::get(); 
        $cartall = Cart::sum('subtotal');
        return view('pages.checkout-page', compact('barang','cartall'));
    }
    public function addpayment(){
            
    }
    public function addtoCo(Request $request,$id){ 
        $product = Product::find($request->product_id);

        $checkout = Checkout::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'subtotal' => $request->subtotal,
            'early_price' => $request->total,
        ]);
        if($checkout){
            // DB::table('carts')->whereNotNull('id')->delete();
            return redirect()->route('checkout')->with('success','user deleted successfully');
        }else{
            return redirect()->route('cart')->with('success','user deleted successfully');
        }
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
    public function show(odel $odel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(odel $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, odel $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(odel $odel)
    {
        //
    }
}
