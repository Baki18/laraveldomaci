<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rez extends Model
{
    use HasFactory;

    protected $table = 'rezs';

    protected $fillable = [
        'dan',
        'mesto',
        'brojStola',
        'utisak',
        'restoranId'
    ];

    public function restorans(){
        return $this->belongsTo(Restoran::class);
    }
}
