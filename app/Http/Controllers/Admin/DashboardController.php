<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Order;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMenu = Menu::all()->count();
        $totalAmount = Order::join('checkout', 'order.order_number', '=', 'checkout.id_order')
            ->where('order.status', '=', 'terima')
            ->sum('checkout.total_harga');
        $totalOrder = Order::where('status', 'terima')->count();
        $adminRole = Role::where('name', 'admin')->first();
        $totalUser = User::whereDoesntHave('roles', function ($query) use ($adminRole) {
            $query->where('role_id', $adminRole->id);
        })->count();
        // Fetch data for reservations per month from the database
        $reservationsPerMonthData = Reservation::selectRaw('MONTH(date) as month, COUNT(*) as count')
            ->where('status', 'Terima')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Prepare data for the chart
        $months = $reservationsPerMonthData->pluck('month')->map(function ($month) {
            return date('F', mktime(0, 0, 0, $month, 1));
        });
        $counts = $reservationsPerMonthData->pluck('count');

        // Render the chart
        return view('pages.admin.dashboard.home', compact('totalMenu', 'totalAmount', 'totalOrder', 'totalUser', 'months', 'counts'));
    }
}
