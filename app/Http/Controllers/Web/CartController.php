<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->with('menu')->get();
        $ship = 2000;
        $harga = 0;
        foreach ($carts as $c) {
            $a = $harga += $c->menu->price * $c->quantity;
        }
        
        // dd($totalHarga);
        // $carts = Cart::where('user_id', Auth::user()->id)->get();
        // dd(Auth::user()->id);
        return view('pages.web.shop.cart', compact('carts', 'ship', 'harga'));
    }

    public function add(Request $request)
    {
        $menu = Menu::findOrFail($request->menu_id);
        $cart = Cart::where('menu_id', $menu->id)->where('user_id', Auth::user()->id)->first();
        if ($cart) {
            $cart->quantity = $cart->quantity + $request->quantity;
            $cart->save();
            return redirect()->route('cart.index')->with('success', 'Berhasil Ditambahkan ke keranjang');
        } else {
            // Buat instance model Cart
            $cart = new Cart();
            // Set nilai atribut model sesuai dengan data dari tabel
            $cart->menu_id = $menu->id;
            $cart->user_id = Auth::user()->id;
            $cart->quantity = $request->quantity;

            // // Kurangi stok pada menu
            // $menu->stock -= $request->quantity;
            // $menu->save();

            // Simpan keranjang ke dalam database
            $cart->save();
            return redirect()->route('cart.index')->with('success', 'Berhasil Ditambahkan ke keranjang');
        }
    }

    public function decrease(Request $request)
    {
        $cart = Cart::findOrFail($request->cart_id);

        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        } else {
            $cart->delete();
        }

        return redirect()->route('cart.index')->with('success', 'Quantity berhasil dikurangi');
    }

    // public function remove($id)
    // {
    //     // Cari produk berdasarkan ID pada tabel cart
    //     $product = Cart::table('cart')->find($id);

    //     if ($product) {
    //         // Hapus produk dari tabel cart berdasarkan ID
    //         Cart::table('cart')->where('id', $id)->delete();
    //     }

    //     return redirect()->route('cart.index');
    // }

    public function remove($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Berhasil Dihapus');
    }
}

