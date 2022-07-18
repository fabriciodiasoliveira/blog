<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment', 'name',
    ];

    protected $hidden = [
        'user_id',
    ];
    public function getAllComments()
    {
        return Comment::query()->select('*')->get();
    }
    public function remove($id){
        Comment::where('user_id', $id)->delete();
    }
    public function getComment($id)
    {
        return Comment::query()->select('*')->where('user_id','=', $id)->first();
    }
    public function setAdmin($id){
        Comment::query()->where('id', '=', $id)->update(['permission' => 'admin']);
    }
    public function setNoAdmin($id){
        Comment::query()->where('id', '=', $id)->update(['permission' => 'noadmin']);
    }
    public function updateWingoutModel($id, Array $options)
    {
        return Comment::query()->select('*')->where('user_id', '=', $id)->first();
    }
    public function store(array $options = [])
    {
        Comment::query()->insert($options);
    }
}
