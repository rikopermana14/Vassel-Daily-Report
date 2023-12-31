<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Running_hours extends Model
{
    use HasFactory;
    protected $table = 'running_hours';
    protected $primaryKey = "id";
    protected $fillable = [
        'date',
        'machine',
        'towing',
        'manouver',
        'slow',
        'economi',
        'full_speed',
        'standby',
        'user_input',
        'id_vdr',
    ];
}
