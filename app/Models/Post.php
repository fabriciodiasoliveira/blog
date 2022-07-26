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
    public function get3Last(){
        return DB::table('personal_posts as p')
            ->join('users as u', 'u.id', '=', 'p.user_id')
            ->select('u.name', 'p.*')
            ->orderBy('p.id', 'desc')
            ->limit(5)
            ->get();
    }
    public function remove($id){
        Post::destroy($id);
    }
    public function getPost($id)
    {
        return DB::table('personal_posts as p')
            ->join('users as u', 'u.id', '=', 'p.user_id')
            ->select('u.name', 'p.*')
            ->where('p.id', '=', $id)
            ->first();
    }
    public function getAnuncio()
    {
        return DB::table('personal_posts as p')
            ->join('users as u', 'u.id', '=', 'p.user_id')
            ->select('u.name', 'p.*')
            ->first();
    }
    public function updateWingoutModel($id, Array $options)
    {
        unset($options['_token']);
        unset($options['_method']);
        Post::query()->where('id', '=', $id)->update($options);
    }
    public function store(array $options = [])
    {
        unset($options['_token']);
        Post::query()->insert($options);
    }
}
