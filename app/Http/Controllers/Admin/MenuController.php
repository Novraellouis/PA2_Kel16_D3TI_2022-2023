<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menu = Menu::where('title', 'like', '%' . $request->keyword . '%')
            ->orWhere('description', 'like', '%' . $request->keyword . '%')
            ->orWhere('price', 'like', '%' . $request->keyword . '%')
            ->orWhere('stock', 'like', '%' . $request->keyword . '%')
            ->orWhere('category', 'like', '%' . $request->keyword . '%')
            ->orderBy('id', 'DESC')
            ->paginate(20);
        return view('pages.admin.menu.main', compact('menu'));
        $menu = Menu::paginate(10);
        return view('example.index', compact('data'));
    }

    public function create()
    {
        return view('pages.admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);



        $file = $request->file('cover');
        $filename = $file->getClientOriginalName();
        $file->move('images/menu', $filename);

        Menu::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover' => $filename,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Ditambahkan');
    }

    public function show(Menu $menu)
    {
        return view('pages.admin.menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('pages.admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:menus,title,' . $menu->id,
            'category' => 'required',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|',
        ]);

        $file = $request->file('cover');
        $filename = $file->getClientOriginalName();
        $file->move('images/menu', $filename);

        $menu->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'cover' => $filename,
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Diubah');
    }

    public function destroy(Menu $menu)
    {
        $file = public_path('images/menu/' . $menu->cover);
        if (file_exists($file)) {
            unlink($file);
        }

        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Dihapus');
    }
}
