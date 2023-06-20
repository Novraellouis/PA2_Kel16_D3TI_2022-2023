<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller

{
    public function index(){
        $reservation = Reservation::with('table')
        ->orderBy('id', 'DESC')
        ->get();
        return view('pages.admin.reservation.main', compact('reservation'));
    }

    public function accept($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Terima';
        $reservation->save();
        return back()->with('success', 'Reservasi diterima');
    }
    public function reject($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Di tolak';
        $reservation->save();

        return back()->with('success', 'Reservasi ditolak');
    }
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return back()->with('success', ' Berhasil Dihapus');
    }
}
