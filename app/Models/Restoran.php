<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rez;

class Restoran extends Model
{
    use HasFactory;

    protected $table = "restorans";

    protected $fillable = [
        'ime',
        'tipRestorana'
    ];

    public function rezs(){
        return $this->hasMany(Rez::class);
    }
}
