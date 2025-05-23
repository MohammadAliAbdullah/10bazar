<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Brand;
// use Cart;
use Auth;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\URL;

class CartsController extends Controller
{

    var $default_userID =  "user_not_logged_id";

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->id);

        Cart::add(array(
            'id'         => $product->id,
            'name'       => $product->title,
            'price'      => $product->sales_price,
            'quantity'   => 1,
            'attributes' => array(
                'image'   => $product->thumbnail_img,
                'slug'    => $product->slug,
                'colored' => $product->attribute_pa_color,
            )
        ));

        return response()->json([
            'success'    => true,
            'message'    => $product->name . ' added to cart!',
            'carts'      => Cart::getContent(),
            'cart_count' => Cart::getTotalQuantity(),
        ]);
    }

    public function updateQuantity(Request $request)
    {
        // $item = Cart::get($request->id);

        Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value'    => $request->quantity
            ]
        ]);

        $updatedItem = Cart::get($request->id);

        return response()->json([
            'success'     => true,
            'message'     => 'Quantity updated',
            'carts'       => Cart::getContent(),
            'cart_count'  => Cart::getTotalQuantity(),
            'total_price' => $updatedItem->getPriceSum(),   // return updated total
            'sub_total'   => Cart::getSubTotal(),
            'grand_total' => Cart::getTotal(),
        ]);
    }

    public function removeItem(Request $request)
    {
        Cart::remove($request->id);

        return response()->json([
            'success'     => true,
            'message'     => 'Item removed',
            'carts'       => Cart::getContent(),
            'cart_count'  => Cart::getTotalQuantity(),
            'sub_total'   => Cart::getSubTotal(),
            'grand_total' => Cart::getTotal(),
        ]);
    }

    public function headerCartList()
    {
        $items    = Cart::getContent();
        // return $items;
        $subtotal = Cart::getSubTotal();

        return response()->json([
            'items' => $items,
            'subtotal' => number_format($subtotal, 2),
        ]);
    }

    public function cart()
    {
        $cartCollection = Cart::getContent();
        $cartTotal      = Cart::gettotal();
        //dd($cartCollection);
        return view('Frontend.Page.cart', compact('cartCollection', 'cartTotal'));
    }

    public function add(Request $request)
    {
        //dd($request->all());
        Session::put('url.intended', URL::previous());
        Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->thumbnail_img,
                'slug' => $request->slug,
                'colored' => $request->attribute_pa_color,
            )
        ));

        if (Session::get('url.intended')) {
            return Redirect(Session::get('url.intended'))->with('status', 'You are Logged in as customer!');
        }
        //return redirect()->route('home.index')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove(Request $request)
    {
        //dd($request);
        Cart::remove($request->id);
        return redirect()->route('cart.list')->with('alert_msg', 'Item is removed!');
    }
    public function update(Request $request)
    {
        //retry($request->all());
        Cart::update(
            $request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            )
        );
        return redirect()->route('cart.list')->with('success_msg', 'Cart is Updated!');
    }

    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }
}
