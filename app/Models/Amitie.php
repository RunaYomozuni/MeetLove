<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amitie extends Model
{
    use HasFactory;
    protected $fillable = ['demandeur_id', 'receveur_id', 'accepter'];

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
