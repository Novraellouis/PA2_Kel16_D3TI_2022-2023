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
        $reservation = Reservation::with('table')->get();
        return view('pages.admin.reservation.main', compact('reservation'));
    }

    public function accept($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Accepted';
        $reservation->save();

        return redirect('admin/reservation');
    }
    public function reject($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Rejected';
        $reservation->save();

        return redirect('admin/reservation')->with('reject', 'ditolak');
    }
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('admin/reservation');
    }
}
