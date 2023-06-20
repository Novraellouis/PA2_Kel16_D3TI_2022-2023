<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;


class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Order::orderBy('id', 'DESC')->get();
        $totalAmount = Order::join('checkout', 'order.order_number', '=', 'checkout.id_order')
            ->where('order.status', '=', 'terima')
            ->sum('checkout.total_harga');
        return view('pages.admin.pemesanan.main', compact('pemesanan', 'totalAmount'));
    }
    public function show($id)
    {
        // $pemesanan = Order::with('checkouts')->where('id',$id)->get();
        // $carts = Cart::where('user_id', Auth::user()->id)->with('menu')->get();

        $pemesanan = Order::findOrFail($id);

        return view('pages.admin.pemesanan.show', compact('pemesanan'));
    }

    public function accept($id)
    {
        $reservation = Order::find($id);
        $reservation->status = 'terima';
        $reservation->save();

        return back()->with('success', 'pembayaran diterima');
    }
    public function reject($id)
    {
        $reservation = Order::find($id);
        $reservation->status = 'tolak';
        $reservation->save();

        return redirect('admin/pemesanan')->with('success', 'pembayaran ditolak');
    }
    public function destroy($id)
    {
        $reservation = Order::find($id);
        $reservation->delete();

        return back()->with('success', 'berhasil dihapus');
    }
    public function exportPDF()
    {
        $pemesanan = Order::all();
        $totalAmount = Order::join('checkout', 'order.order_number', '=', 'checkout.id_order')
            ->where('order.status', '=', 'terima')
            ->sum('checkout.total_harga');
        $pdf = PDF::loadView('pages.admin.pemesanan.pdf', compact('pemesanan', 'totalAmount'));


        return $pdf->download('data_pemesanan.pdf');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
