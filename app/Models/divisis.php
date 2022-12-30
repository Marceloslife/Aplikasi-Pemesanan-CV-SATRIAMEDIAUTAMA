<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisis extends Model
{
    use HasFactory;
    protected $table = 'divises';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_divisi'];
    public function anggotas()
    {
        return  $this->hasMany(Anggotas::class);
    }
}