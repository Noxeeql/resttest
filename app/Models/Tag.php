<?php

namespace App\Models;

use App\Models\NewsTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    protected $fillable = ['*'];
    use HasFactory;

    public function newsTags()
    {
        return $this->hasMany(NewsTag::class);
    }
}
