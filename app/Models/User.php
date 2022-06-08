<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Permission;

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
        return DB::connection('mysql')->table('users as u')
               ->leftJoin('personal_permissions as p', 'u.id', '=', 'p.user_id')
               ->select('u.*','p.permission')
               ->get();
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
        $model = new Permission();
        $id = User::query()->insertGetId($options);
        dd($id);
        $model->store(['user_id' => $id,]);        
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
