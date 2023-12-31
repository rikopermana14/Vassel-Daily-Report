<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_Status extends Model
{
    use HasFactory;
    protected $table = 'stock_status';
    protected $primaryKey = "id";
    protected $fillable = [
        'date',
        'code_product',
        'name_product',
        'spec'  ,
        'previous',  
        'received'  ,
        'used'  ,
        'transfered'  ,
        'sounding'  ,
        'remain'  ,
        'user_input',
        'id_vdr',
    ];
}
