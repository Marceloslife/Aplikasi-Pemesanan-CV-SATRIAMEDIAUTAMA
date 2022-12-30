<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','created_at','update_at', 'nama_event','penyelenggara', 'tgl_dari', 'tgl_sampai','lokasi_event', 'no_hp_penyelenggara','email_penyelenggara','status','layanan_id'
    ];
    public function layanans()
    {
        return  $this->belongsToMany(Layanans::class);
    }
}