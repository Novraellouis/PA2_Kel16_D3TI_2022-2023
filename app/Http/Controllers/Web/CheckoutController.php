<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Menu;
use App\Models\Checkout;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
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
        return view('pages.web.shop.checkout', compact('carts', 'ship', 'harga', 'list'));
    }
    public function checkout(Request $request)
    {

        // $charact
        // $post   = $request->post();
        $request->validate([
            'nama_customer' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'catatan' => 'required',
            'gambar' => 'required',
        ]);

        // $idorder = date('YmdHis');
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // set karakter yang digunakan
        $idorder = 'PA' . substr(str_shuffle($characters), 0, 14);

        $order = new Order;
        $order->order_number  = $idorder;
        $order->id_customer  = Auth::user()->id;
        $order->nama_customer   = $request->nama_customer;
        $order->telepon         = $request->telepon;
        $order->alamat          = $request->alamat;
        $order->catatan         = $request->catatan;
        $order->payment_method = "Transfer";
        // $order->payment_method  = $request->payment_method;
        // $order->status          = 1;


        $image = $request->file('gambar');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $order->gambar          = $name;
        // dd($order);
        $order->save();

        $notif = new Notification();
        $notif->user_id = Auth::user()->id;
        $notif->nama_pemesan = $order->nama_customer;
        $notif->notif = 'Melakukan pemesanan';
        // dd($notif);
        $notif->save();

        $cart = Cart::select('carts.id', 'carts.menu_id', 'carts.user_id', 'quantity', 'menus.title', 'menus.cover', 'menus.price')->join('menus', 'carts.menu_id', '=', 'menus.id')->where('carts.user_id', Auth::user()->id)->get()->toArray();

        foreach ($cart as $row) {
            $order_p = new Checkout;
            $order_p->id_product = $row['menu_id'];
            $order_p->id_order   = $idorder;
            $order_p->quantity   = $row['quantity'];
            $order_p->harga      = $row['price'];
            $order_p->total_harga = $row['quantity'] * $row['price'];
            $order_p->save();

            $menu = Menu::find($row['menu_id']);
            $menu->stock -= $row['quantity'];
            $menu->save();

            $cart = Cart::find($row['id']);
            $cart->delete();
        }
        return redirect()->route('pemesanan.index')->with('success', 'Berhasil Melakukan pembayaran!');
    }
    public function checkoutCash(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'catatan' => 'required',
        ]);
        // $charact
        $post   = $request->post();

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // set karakter yang digunakan
        $idorder = 'PA' . substr(str_shuffle($characters), 0, 14);

        $order = new Order;
        $order->order_number  = $idorder;
        $order->id_customer  = Auth::user()->id;
        $order->nama_customer   = $post['nama_customer'];
        $order->telepon         = $post['telepon'];
        $order->alamat          = $post['alamat'];
        $order->catatan         = $post['catatan'];
        $order->payment_method  = "Cash";
        // $order->status          = 1;
        $order->gambar          = "0";
        // dd($order);
        $order->save();

        $notif = new Notification();
        $notif->user_id = Auth::user()->id;
        $notif->nama_pemesan = $order->nama_customer;
        $notif->notif = 'Melakukan pemesanan';
        // dd($notif);
        $notif->save();


        $cart = Cart::select('carts.id', 'carts.menu_id', 'carts.user_id', 'quantity', 'menus.title', 'menus.cover', 'menus.price')->join('menus', 'carts.menu_id', '=', 'menus.id')->where('carts.user_id', Auth::user()->id)->get()->toArray();

        foreach ($cart as $row) {
            $order_p = new Checkout;
            $order_p->id_product = $row['menu_id'];
            $order_p->id_order   = $idorder;
            $order_p->quantity   = $row['quantity'];
            $order_p->harga      = $row['price'];
            $order_p->total_harga = $row['quantity'] * $row['price'];
            $order_p->save();
            $menu = Menu::find($row['menu_id']);
            $menu->stock -= $row['quantity'];
            $menu->save();

            $cart = Cart::find($row['id']);
            $cart->delete();
        }
        // dd($order_p);
        return redirect()->route('pemesanan.index')->with('success', 'Berhasil Melakukan pembayaran!');
    }
}
