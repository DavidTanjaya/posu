<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //hasMany

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    // public function tables()
    // {
    //     return $this->hasMany(Table::class);
    // }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function pengeluarans()
    {
        return $this->hasMany(Pengeluaran::class);
    }

    //belongsTo
}
