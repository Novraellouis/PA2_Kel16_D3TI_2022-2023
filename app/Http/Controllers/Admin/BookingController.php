<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $booking = Booking::where('title', 'like', '%' . $request->keyword . '%')
                ->orWhere('description', 'like', '%' . $request->keyword . '%')
                ->orWhere('stock', 'like', '%' . $request->keyword . '%')
                ->paginate(10);
        return view('pages.admin.booking.main', compact('booking'));
    }

    public function create()
    {
        return view('pages.admin.booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);


        Booking::create([
            'title' => $request->title,
            'description' => $request->description,
            'stock' => $request->stock,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Ditambahkan');
    }

    public function show(Booking $booking)
    {
        return view('pages.admin.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        return view('pages.admin.booking.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:menus,title,' . $booking->id,
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);

        $booking->update([
            'title' => $request->title,
            'description' => $request->description,
            'stock' => $request->stock,
        ]);

        return redirect()->route('booking.index')->with('success', 'Menu Berhasil Diubah');
    }

    public function destroy(Booking $booking)
    {

        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Menu Berhasil Dihapus');
    }
}
