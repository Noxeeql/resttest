<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsTag extends Model
{
    protected $fillable = ['*'];
    use HasFactory;

    public function tags()
    {
        return $this->hasOne(Tag::class);
    }

    public function news()
    {
        return $this->hasOne(News::class);
    }
}
