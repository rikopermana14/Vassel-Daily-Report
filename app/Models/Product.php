<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primaryKey = "id";
    protected $fillable = [
        'product_id',
        'name',
        'spec',
        'stock',
        'image',
        'type',
        'alias',
        'unit',
        'min',
        'lead',
        'delivery',
        'idle',
        'volume',
        'id_user',
    ];
}
