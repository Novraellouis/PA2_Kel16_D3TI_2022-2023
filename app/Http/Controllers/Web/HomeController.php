<?php

namespace App\Http\Controllers\Web;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;


class HomeController extends Controller
{
    public function index(Request $request)
    {
         $menu = Menu::paginate(10);
        return view('pages.web.dashboard.home', compact('menu'));
    }
    public function menu(Request $request){
         $searchTerm = $request->input('search');


         return view ('pages.web.dashboard.home', compact('menu'));
    }
}

?>
