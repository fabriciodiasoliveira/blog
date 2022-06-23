<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = "personal_permissions";
    protected $fillable = [
        'permission',
    ];

    protected $hidden = [
        'user_id',
    ];
    public function getAllPermissions()
    {
        return Permission::query()->select('*')->get();
    }
    public function remove($id){
        Permission::where('user_id', $id)->delete();
    }
    public function getPermission($id)
    {
        return $this->find($id);
    }
    public function setAdmin($id){
        Permission::query()->where('id', '=', $id)->update(['permission' => 'admin']);
    }
    public function setNoAdmin($id){
        Permission::query()->where('id', '=', $id)->update(['permission' => 'noadmin']);
    }
    public function updateWingoutModel($id, Array $options)
    {
        return Permission::query()->select('*')->where('user_id', '=', $id)->first();
    }
    public function store(array $options = [])
    {
        Permission::query()->insert($options);
    }
}
