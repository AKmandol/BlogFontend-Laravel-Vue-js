<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','post','post_excerpt','slug','user_id','featuredImage','metaDescription','views','jsonData'];

    public function setSlugAttribute($title)
    { 
        $this->attributes['slug'] = $this->uniqueSlug($title);
    }

    private function uniqueSlug($title){
        $slug = Str::slug($title,'_');
        $count = Blog::where('slug', 'LIKE',"{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }

    public function tag(){
        return $this->belongsToMany(Tag::class,'blogtags','blog_id');
    }
    public function cat(){
        return $this->belongsToMany(Category::class,'blogcategories','blog_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id')->select('id','fullName','profilePic');
    }

    

}
