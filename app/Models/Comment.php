<?php

namespace App\Models;

use app\Models\News;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = ['*'];
    use HasFactory;

    public function news()
    {
        return $this->hasOne(News::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
