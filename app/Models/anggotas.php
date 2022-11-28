<?php

namespace App\Models;

use App\Models\divisis as ModelsDivisis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\divisis;

class anggotas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function divisis(){
        return $this->belongsTo(ModelsDivisis::class);
        
        // return $this->belongsTo('App\Models\divisis');
    }
}