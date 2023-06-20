<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all();
        return view('pages.admin.review.main', compact('review'));
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return back()->with('success', 'Ulasan berhasil dihapus');
    }
}
