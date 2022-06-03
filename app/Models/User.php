<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        DB::connection('mysql')->table('users as u')
               ->leftJoin('personal_permissions as p', 'u.id', '=', 'p.user_id')
               ->select('u.*','p.permissao')
               ->get();
    }
    public function remove($id){
        User::destroy($id);
    }
    public function getUser($id)
    {
        return $this->find($id);
    }
    public function updateSemModel($id, Array $options)
    {
        User::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        User::query()->insert($options);
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
