<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Checkout extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'checkout';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_product',
        'id_order',
        'quantity',
        'harga',
        'total_harga',
        'nama_product'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'order_number');
    }

    public function product()
    {
        return $this->belongsTo(Menu::class, 'id_product', 'id');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'checkout_id', 'id');
    }
}
