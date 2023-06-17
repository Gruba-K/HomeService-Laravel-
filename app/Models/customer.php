<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class customer extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    protected $table='customer';
    protected $fillable=['name','email','password','mobile','address','worktype','additionalquery'];

}
