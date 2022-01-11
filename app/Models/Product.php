<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';



    protected $fillable = [
        'id',
        'name',
        'member_id',
        'description',
        'category',
        'image',
        'price',
        'stock',
        'status',

    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'is_feature' => 'boolean',
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function CartItem(){
        return $this->hasMany(CartItem::class);
    }
    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }
}
