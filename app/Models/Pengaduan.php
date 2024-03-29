<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $guarded = [''];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
