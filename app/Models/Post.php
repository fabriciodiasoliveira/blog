<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        return DB::table('personal_posts as p')
            ->join('users as u', 'u.id', '=', 'p.user_id')
            ->select('u.name', 'p.*')
            ->orderBy('p.id', 'desc')
            ->paginate(20);
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
        unset($options['_token']);
        Post::query()->insert($options);
    }
}
