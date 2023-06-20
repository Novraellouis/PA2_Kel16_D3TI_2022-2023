<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Table;
use App\Models\Reservation;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cancel($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Cancelled';
        $reservation->save();
        return redirect()->route('detail.index')->with('success', 'Reservasi di batalkan');
    }
    public function index()
    {
        $table = Table::all();
        if (Auth::user()) {
            $reservation = Reservation::with('table')
                ->where('user_id', Auth::user()->id)
                ->get();
            return view('pages.web.reservation.main', compact('table', 'reservation'));
        }
        return view('pages.web.reservation.main', compact('table'));
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
            'table_id' => 'required',
            'jumlah_orang' => 'required|integer|min:1',
            'date' => 'required',
            'time' => 'required',
        ]);

        $reservation = new Reservation;
        $reservation->username = Auth::user()->name;
        $reservation->user_id = Auth::user()->id;
        $reservation->table_id = $request->table_id;
        $reservation->jumlah_orang = $request->jumlah_orang;
        $reservation->time = $request->time;
        $reservation->date = Carbon::createFromFormat('m/d/Y', $request->input('date'))->format('Y-m-d H:i:s');
        // dd($request->all());
        $reservation->save();

        $notif = new Notification();
        $notif->user_id = Auth::user()->id;
        $notif->nama_pemesan = Auth::user()->name;
        $notif->notif = 'Melakukan reservasi';
        // dd($notif);
        $notif->save();
        return redirect()->route('detail.index')->with('success', 'Reservasi berhasil ditambahkan');
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
    public function destroy($id)
    {
        //
    }
}
