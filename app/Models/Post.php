<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "personal_posts";
    protected $fillable = [
        'head', 'summary', 'body',
    ];

    protected $hidden = [
        'user_id',
    ];
    public function getAllPermissions()
    {
        return Permission::query()->select('*')->get();
    }
    public function remove($id){
        Permission::destroy($id);
    }
    public function getPermission($id)
    {
        return $this->find($id);
    }
    public function updateWingoutModel($id, Array $options)
    {
        Permission::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        Permission::query()->insert($options);
    }
}
