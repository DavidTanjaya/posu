<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $fillable = [];
    //hasMany
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function penjualan_details()
    {
        return $this->hasMany(PenjualanDetail::class);
    }

    //belongsTo
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function umkms()
    {
        return $this->belongsTo(Umkm::class);
    }
}
