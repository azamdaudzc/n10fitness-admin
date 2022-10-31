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

    static $rules = [
		'name' => 'required',
		'password' => 'required',
		'email' => 'required|unique:users,email',

    ];

    static $editrules = [
		'name' => 'required',

		'email' => 'required',

    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'is_active',
        'athletic_type',
        'height',
        'age',
        'gender',
        'avatar',
        'phone',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userCreator()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }

}
