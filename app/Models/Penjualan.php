<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $fillable = [];

    //hasMany
    public function penjualan_details()
    {
        return $this->hasMany(PenjualanDetail::class);
    }

    //belongsTo
    public function user()
    {
        return $this->belongsTo(Category::class);
    }

    // public function table()
    // {
    //     return $this->belongsTo(Table::class);
    // }
}
