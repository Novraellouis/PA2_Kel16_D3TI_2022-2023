<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function cancel($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'Cancelled';
        $reservation->save();
        return redirect('reservation');
    }
    public function index()
    {
        $table = Table::all();
        if (Auth::user()) {
            $reservation = Reservation::with('table')
                ->where('user_id', Auth::user()->id)
                ->get();
            return view('pages.web.details.main', compact('table', 'reservation'));
        }


        return view('pages.web.details.main', compact('table'));
    }
}
