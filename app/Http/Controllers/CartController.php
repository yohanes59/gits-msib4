<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')->get();
        $cartItem = Cart::with('product')->get();
        return view('pages.user.cart.index', [
            'produk' => $product,
            'itemAdded' => $cartItem,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required','numeric', 'min:1'],
            'quantity' => ['required', 'numeric', 'min:1', 'max:1'],
        ]);

        // produk sudah ada dikeranjang?
        $checkAvailable = Cart::where('product_id', $request->product_id)->first();
        // jika sudah update jumlah = jumlah lama + jumlah baru
        if ($checkAvailable) {
            // jika sudah update jumlah = jumlah lama + jumlah baru
            $addAgain = Cart::where('product_id', $checkAvailable->product_id)->update(['quantity' => $checkAvailable->quantity + $request->quantity]);
        } else {
            // jika belum tambahkan produk ke keranjang
            $data = [
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ];
            Cart::create($data);
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $item = Cart::findOrFail($id);
        $item->quantity = request('quantity');
        $item->save();

        return response()->json([
            'success' => true,
            'message' => 'Quantity updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::find($id)->delete();
        return redirect()->route('home');
    }
}
