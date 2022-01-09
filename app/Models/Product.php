<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function user(){
        return $this->belongsTo(User::class);
    }

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
}
