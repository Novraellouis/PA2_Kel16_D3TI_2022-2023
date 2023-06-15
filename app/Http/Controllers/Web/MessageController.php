<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nomorhp' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->nomorhp = $request->nomorhp;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('success', 'Kritik dan saran telah terkirim. Terima kasih!');
    }
    public function destroy(Message $message)
    {
        //
    }
}
