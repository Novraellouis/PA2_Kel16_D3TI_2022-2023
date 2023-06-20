<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pengaduan;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $pengaduan = Pengaduan::where('user_id', $user_id)->get();
        return view('pages.web.pengaduan.main', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('pages.web.pengaduan.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'description' => 'required',
        ]);

        $pengaduan = Pengaduan::create([
            'user_id' => Auth::id(),
            'menu_id' => $request->menu_id,
            'description' => $request->description,
        ]);
        // dd($pengaduan);


        $notif = new Notification();
        $notif->user_id = Auth::user()->id;
        $notif->nama_pemesan = Auth::user()->name;
        $notif->notif = 'Mengirim pengaduan Makanan';
        // dd($notif);
        $notif->save();

        // Lakukan tindakan lain yang diperlukan setelah penyimpanan pengaduan
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan Berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        // Memastikan hanya pemilik pengaduan yang dapat mengedit
        if ($pengaduan->user_id != Auth::id()) {
            return redirect()->route('pengaduan.index')->with('error', 'Akses ditolak. Anda tidak memiliki izin untuk mengedit pengaduan ini.');
        }

        $menus = Menu::all();

        return view('pages.web.pengaduan.edit', compact('pengaduan', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'description' => 'required',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);

        // Memastikan hanya pemilik pengaduan yang dapat mengedit
        if ($pengaduan->user_id != Auth::id()) {
            return redirect()->route('pengaduan')->with('error', 'Akses ditolak. Anda tidak memiliki izin untuk mengedit pengaduan ini.');
        }

        $pengaduan->menu_id = $request->menu_id;
        $pengaduan->description = $request->description;
        $pengaduan->save();

        // Lakukan tindakan lain yang diperlukan setelah pembaruan pengaduan
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);

        if (!$pengaduan) {
            return redirect()->route('pengaduan.index')->with('error', 'Pengaduan tidak ditemukan.');
        }

        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }
}
