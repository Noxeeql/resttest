<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\NewsTag;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    protected $fillable = ['*'];
    public $timestamps = false;
    use HasFactory;

    public function tags()
    {
        return $this->hasMany(NewsTag::class);
    }

    public function comments()
    {
        // return $this->hasMany(Comment::className(), ['news_id' => 'id']);
        return $this->hasMany(Comment::class);
    }
}
