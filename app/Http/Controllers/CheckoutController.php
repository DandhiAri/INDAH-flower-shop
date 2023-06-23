<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Card;
// use Psy\Util\Str;
use Illuminate\Support\Str;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $co = Checkout::all();
        return view('admin.checkout.index',compact('co'));
    }

    // $co = Checkout::all();
    // return view('admin.checkout.index',compact('co'));
    public function insertCard(Request $request){
        $cardName = Card::where('name',$request->name)->first();
        $cardNum = Card::where('codeNumber',$request->numberCard)->first();
        $card = Card::where('name', $cardName)->where('codeNumber', $cardNum)->get();
        if($card){
            // $cart->update($request->card);
            return redirect()->route('checkout')->with('success','user deleted successfully');
        }else{
            dd($card);
        }
    }
    public function addpayment(Request $request){
        $res = Payment::create([
            'card_id' => $request->card_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'subtotal' => $request->subtotal,
            'early_price' => $request->total,
            'total_price' => $request->suptotal,
            'kembalian' => $request->changepay,
        ]);

        if($res){
            $cart = Cart::where('user_id',auth()->user()->id);
            Cart::destroy($cart);
            return redirect()->route('status')->with('success','user deleted successfully');
        }else{
            return redirect()->route('checkout')->with('success','user deleted successfully');
        }
    }
    public function addtoCo(Request $request){ 
        // $product = Product::find($request->product_id);
        
        $checkout = Checkout::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            // 'payment_id' => $request->payment_id,
            'quantity' => $request->quantity,
            'subtotal' => $request->subtotal,
            'totalPrice' => $request->total,
            'codeSent' => Str::random(15)
        ]);
        if($checkout){
            DB::table('carts')->whereNotNull('id')->delete();
            return redirect()->route('checkout')->with('success','user deleted successfully');
        }else{
            return redirect()->route('cart')->with('success','user deleted successfully');
        }
    }
    public function status(){
        $co = Checkout::where('user_id',auth()->user()->id)->get();
        return view ('pages.status-page',compact('co'));
        // dd($co);

    }
    public function cart(){
        $cartItems = Cart::get(); 
        if($cartItems){
            $cartItems = Cart::get(); 
            $barang = Cart::with('product')->where('user_id', auth()->id())->get();
            $cartall = Cart::sum('subtotal');
            
            return view('pages.checkout-page', compact('barang','cartall'));
        }else{
            return view('pages.cart-page');
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
