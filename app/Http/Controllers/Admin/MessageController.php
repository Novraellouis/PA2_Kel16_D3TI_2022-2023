<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Controllers\Admin\AdminMessageController;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('pages.admin.kritiksaran.main', compact('messages'));
    }
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
