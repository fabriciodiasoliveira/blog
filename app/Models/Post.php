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
    public function getAllPosts()
    {
        return Post::query()->select('*')
            ->orderBy('id','DESC')
            ->get();
    }
    public function remove($id){
        Post::destroy($id);
    }
    public function getPost($id)
    {
        return $this->find($id);
    }
    public function updateWingoutModel($id, Array $options)
    {
        Post::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        Post::query()->insert($options);
    }
}
