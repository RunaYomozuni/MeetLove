<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'ignoreComplete',
        'photo',
        'dateNaissance',
        'localisation',
        'sexe',
        'orientation',
        'biographie'
    ];

    //cette méthode retourne un array list d'intérets
    //concernant un user
    public function interets()
    {
        return $this->belongsToMany(Interet::class);
    }

    //cette méthode retourne un array list de users
    //que le membre a demandé en ami
    public function demandesAmities()
    {
        return $this->belongsToMany(User::class, 'amities', 'demandeur_id', 'receveur_id');
    }
    //cette méthode retourne un array list de users
    //qui ont demandé le membre en ami
    public function recoitAmities()
    {
        return $this->belongsToMany(User::class, 'amities', 'receveur_id', 'demandeur_id');
    }
}
