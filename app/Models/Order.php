<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
