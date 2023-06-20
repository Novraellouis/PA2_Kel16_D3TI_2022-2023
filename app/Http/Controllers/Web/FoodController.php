<?php

namespace App\Http\Controllers\Web;

use App\Models\Menu;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;

class FoodController extends Controller
{
    public function index(Menu $menu)
    {
        $review = Review::all();

        return view('pages.web.menu.menudetails', compact('menu', 'review'));
    }

    public function menu(Request $request)
    {
        $searchTerm = $request->input('search');

        $menu = Menu::where('title', 'like', '%' . $searchTerm . '%')
            ->orWhere('description', 'like', '%' . $searchTerm . '%')
            ->paginate(10);
        return view('pages.web.menu.menu', compact('menu'));
    }
    // public function menudetails(Menu $menu){
    //      $menudetails = Menu::all();
    //      return view ('pages.web.menu.menudetails', compact('menudetails'));
    // }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $menu = Menu::where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->paginate(9);

        return view('menu.search-results', compact('menu'));
    }
}
