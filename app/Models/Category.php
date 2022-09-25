<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','summary','photo','is_parent','parent_id','status'];

    public static function getchildByParentID($id){
        return Category::where('parent_id', $id)->pluck('title' ,'id');
    }
    public function products(){
        return $this->hasMany('App\Models\Product', 'cat_id', 'id' );
    }
}
