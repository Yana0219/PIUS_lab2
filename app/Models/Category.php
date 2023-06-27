<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['title', 'code', 'creation_date', 'parent_category_id'];
    
    public function banners()
    {
        return $this->belongsToMany(Banner::class);
    }
}
