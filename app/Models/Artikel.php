<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = ['judul','slug','konten','thumbnail'];

    public function Kategoris(){
        return $this->hasMany(Kategori::class);
    }
}
