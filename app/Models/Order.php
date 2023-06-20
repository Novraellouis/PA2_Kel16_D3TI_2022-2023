<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Order extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'order';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'id_customer',
        'nama_customer',
        'telepon',
        'alamat',
        'catatan',
        'payment_method',
        'status',
        'gambar'
    ];

    public function checkouts()
    {
        return $this->hasMany(Checkout::class, 'id_order', 'order_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }
}
