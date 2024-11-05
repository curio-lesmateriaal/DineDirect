<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function orders() {
        return $this->hasMany(Order::class, 'table_id');
    }
}
