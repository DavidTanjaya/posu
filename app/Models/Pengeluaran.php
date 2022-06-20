<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $fillable = [];
    //hasMany

    //belongsTo
    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
