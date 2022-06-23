<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;

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
    public function getAllUsers()
    {
        return User::query()->select('*')->get();
    }
    public function remove($id){
        User::destroy($id);
    }
    public function getUser($id)
    {
        return $this->find($id);
    }
    public function updateWingoutModel($id, Array $options)
    {
        User::query()->where('id', '=', $id)->update($options);
    }
    
    public function store(array $options = [])
    {
        return User::query()->insertGetId($options);
    }
    public function setAdmin($id, Array $options){
        unset($options['_method']);
        unset($options['_token']);
        User::query()->where('id', '=', $id)->update($options);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
