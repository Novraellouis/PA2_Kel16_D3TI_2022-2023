<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Pemesanan;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\DB;
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

        // Mengambil data order dengan status 'terima' dan total harga dari database
        $orders = Order::where('status', 'terima')->with('checkouts')->get();

        // Menginisialisasi array untuk menyimpan data pendapatan per bulan
        $revenueData = [];

        // Meloopi setiap order
        foreach ($orders as $order) {
            // Mengambil total harga dari setiap checkout pada order
            $totalHarga = $order->checkouts->sum('total_harga');

            // Mengambil bulan dari tanggal order
            $bulan = date('M Y', strtotime($order->created_at));

            // Menambahkan pendapatan ke array sesuai dengan bulan
            if (isset($revenueData[$bulan])) {
                $revenueData[$bulan] += $totalHarga;
            } else {
                $revenueData[$bulan] = $totalHarga;
            }
        }

        // Mengurutkan array berdasarkan kunci (bulan)
        uksort($revenueData, function ($a, $b) {
            return strtotime($a) - strtotime($b);
        });

        // Mengonversi array data pendapatan ke format yang sesuai dengan format yang diperlukan oleh ApexCharts
        $chartData = [];
        foreach ($revenueData as $bulan => $pendapatan) {
            $chartData[] = [
                'x' => $bulan,
                'y' => $pendapatan,
            ];
        }
        $productSales = DB::table('order')
            ->join('checkout', 'order.order_number', '=', 'checkout.id_order')
            ->join('menus', 'checkout.id_product', '=', 'menus.id')
            ->where('order.status', 'terima')
            ->select(
                DB::raw('DATE_FORMAT(order.created_at, "%M") AS month'),
                DB::raw('YEAR(order.created_at) AS year'),
                'menus.title AS product',
                DB::raw('SUM(checkout.quantity) AS total_sales')
            )
            ->groupBy('year', 'month', 'product')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $monthlySales = [];
        foreach ($productSales as $sales) {
            $year = $sales->year;
            $month = $sales->month;
            if (!isset($monthlySales[$year])) {
                $monthlySales[$year] = [];
            }
            if (!isset($monthlySales[$year][$month])) {
                $monthlySales[$year][$month] = [];
            }
            $monthlySales[$year][$month][] = [
                'product' => $sales->product,
                'total_sales' => $sales->total_sales,
            ];
        }

        $favoriteProductData = [];
        foreach ($monthlySales as $year => $salesByYear) {
            foreach ($salesByYear as $month => $sales) {
                $highestSalesProduct = collect($sales)->sortByDesc('total_sales')->first();
                $favoriteProductData[] = [
                    'year' => $year,
                    'month' => $month,
                    'product' => $highestSalesProduct['product'],
                    'total_sales' => $highestSalesProduct['total_sales'],
                ];
            }
        }

        $sortedFavoriteProductData = collect($favoriteProductData)->sortBy(function ($item) {
            $dateString = $item['year'] . '-' . str_pad($item['month'], 2, '0', STR_PAD_LEFT) . '-01';
            return strtotime($dateString);
        })->values()->all();

        // Render the chart
        return view('pages.admin.dashboard.home', compact('totalMenu', 'totalAmount', 'totalOrder', 'totalUser', 'months', 'counts', 'chartData', 'sortedFavoriteProductData'));
    }
}
