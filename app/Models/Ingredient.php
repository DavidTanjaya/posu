<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //protected $fillable = [];

    //hasMany
    public function ingredient_details()
    {
        return $this->hasMany(IngredientDetail::class);
    }

    //belongsTo
    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
