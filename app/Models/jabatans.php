<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatans extends Model
{
    use HasFactory;
    protected $table = 'jabatans';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_jabatan'];
    public function anggotas()
    {
        return  $this->hasMany(Anggotas::class);
    }
}