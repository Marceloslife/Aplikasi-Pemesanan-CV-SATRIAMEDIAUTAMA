<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggotas extends Model
{
    // use HasFactory;
    protected $table = 'anggotas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','created_at','update_at', 'nama','email_address', 'no_hp', 'jenis_kelamin','tanggal_lahir', 'status','alamat','divises_id','jabatans_id', 'nik','no_karyawan','tanggal_begabung','link_instagram'
    ];
    public function jabatans()
    {
        return  $this->belongsTo(Jabatans::class);
    }
    public function divises()
    {
        return  $this->belongsTo(Divisis::class);
    }

}