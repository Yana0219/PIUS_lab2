<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $fillable = ['banner_title', 'active_sience', 'active_until', 'link', 'url_img'];
    

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
