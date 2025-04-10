<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

    protected $fillable = ['role_id', 'name', 'email', 'password'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function apprentice()
    {
        return $this->hasOne(Apprentice::class);
    }
=======
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document_type', // Tipo de documento
        'document_number', // Número de documento
        'name', // Nombre completo
        'email', // Correo electrónico
        'password', // Contraseña
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 
        'remember_token', // Token de recordatorio
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Fecha de verificación del email
    ];
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
}
