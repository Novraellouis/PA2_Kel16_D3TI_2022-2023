<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        // Mendapatkan semua notifikasi
        $notifications = Notification::all();

        return view('pages.admin.dashboard.home', compact('notifications'));
    }

    public function store(Request $request)
    {
        // Membuat notifikasi baru
        $notification = new Notification();
        $notification->user_id = $request->user_id;
        $notification->messages = $request->$messages;
        $notification->read = false;
        $notification->save();

        return redirect()->route('notifications.index')->with('success', 'Notifikasi berhasil ditambahkan.');
    }
}

}
