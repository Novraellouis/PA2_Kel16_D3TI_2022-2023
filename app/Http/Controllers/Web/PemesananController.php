<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function cart()
    {
        $list = Order::paginate(10);
        $carts = Cart::where('user_id', Auth::user()->id)->with('menu')->get();
        $ship = 2000;
        $harga = 0;
        foreach ($carts as $c) {
            $a = $harga += $c->menu->price * $c->quantity;
        }
        // dd($totalHarga);
        // $carts = Cart::where('user_id', Auth::user()->id)->get();
        // dd(Auth::user()->id);
        return view('pages.web.detailspemesanan.main', compact('carts', 'ship', 'harga', 'list'));
    }

    public function index()
    {
        $list = Order::where('id_customer', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->paginate(10);
        // $list = Order::paginate(10);
        return view('pages.web.detailspemesanan.main', compact('list'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('pages.web.detailspemesanan.show', compact('order'));
    }
}
