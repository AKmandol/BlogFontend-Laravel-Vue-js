<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;




class BlogController extends Controller
{
    public function index(Request $request){

        $categories = Category::select('id','categoryName','iconImage')->get();
        $tags = Tag::select('tagName','id')->get();
        $blogs = Blog::orderBy('id','desc')->with(['cat','user'])->select(['id','title','post_excerpt','slug','user_id','featuredImage'])->paginate(6);
        //return $blogs;
        return view('font.home',compact('categories','blogs','tags'));
    }

    public function singleBlog(Request $request, $slug){

       

        $blogs = Blog::where('slug', $slug)->with(['cat','tag','user'])->first(['id','title','user_id','featuredImage','post','views']);

        $cat_ids = [];
        foreach ($blogs->cat as $cat) {
            array_push($cat_ids,$cat->id);
        }

        //return  $cat_id;

        $relatedBlog = Blog::with('user')->where('id', '!=',$blogs->id)->whereHas('cat', function($q) use($cat_ids){
            $q->whereIn('category_id', $cat_ids);
        })->limit(5)->orderBy('id','desc')->get(['id','title','slug','user_id','featuredImage']);

        //return $blogs;
        return view('font.blogSingle',compact(['blogs','relatedBlog']));
    }

    
    public function compose(View $view)
    {
        $cat = Category::select('id','categoryName')->get();
        $view->with('cat', $cat);
    }


    public function categoryIndex(Request $request,$categoryName,$id)
    {
        $blogs = Blog::with('user')->whereHas('cat',function($q) use($id){
            $q->where('category_id', $id);
        })->orderBy('id','desc')->select('id','title','slug','user_id','featuredImage','post_excerpt')->paginate(3);
       
        $catImage = Category::where('id',$id)->first();
        return view('font.category',compact(['blogs','categoryName','catImage']));
    }

    public function tagIndex(Request $request,$tagName,$id)
    {
        $blogs = Blog::with('user')->whereHas('tag',function($q) use($id){
            $q->where('tag_id', $id);
        })->orderBy('id','desc')->select('id','title','slug','user_id','featuredImage','post_excerpt')->paginate(3);
       
        return view('font.tag',compact(['blogs','tagName']));
    }

    public function userAllPost(Request $request,$fullName,$id)
    {
        $blogs = Blog::with('user')->whereHas('user',function($q) use($id){
            $q->where('id', $id);
        })->orderBy('id','desc')->select('id','title','slug','user_id','featuredImage','post_excerpt')->paginate(3);
      //return $fullName;
        return view('font.userPost',compact(['blogs','fullName']));
    }

    public function search(Request $request)
    {
        $str =  $request->str;
        $blogs = Blog::orderBy('id','desc')->with(['cat','user','tag'])->select(['id','title','post_excerpt','slug','user_id','featuredImage']);
        
        $blogs->when($str != '', function($q) use($str){
            $q->where('title','LIKE',"{$str}%")
            ->orWhereHas('cat', function($q) use($str){
              $q->where('categoryName', $str);
            })
            ->orWhereHas('tag', function($q) use($str){
              $q->where('tagName', $str);
            });
        });
        
        
        // if($str){
        //     $blogs->where('title','LIKE',"{$str}%")
        //           ->orWhereHas('cat', function($q) use($str){
        //             $q->where('categoryName', $str);
        //           })
        //           ->orWhereHas('tag', function($q) use($str){
        //             $q->where('tagName', $str);
        //           });
        // }

        $blogs = $blogs->paginate(3);

        $blogs = $blogs->appends($request->all());
        return view('font.blog',compact('blogs'));
    }

    
}
