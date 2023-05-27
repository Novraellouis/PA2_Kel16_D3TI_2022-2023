<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $table = 'table';
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reservation()
    {
        return $this->hasMany(User::class);
    }
}


