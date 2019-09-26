<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        $data['featured_post']=Post::with('category','author')->where('is_featured',1)->where('status','published')->limit(3)->latest()->get();
       // dd($data['featured_post'][0]->file);
        $data['recent_post']=Post::with('category','author')->where('status','published')->limit(3)->latest()->get();
       $data['most_viewed_post']=Post::with('category')->orderBy('total_view','DESC')->limit(5)->get();
        //dd($data);
       // $data['categories']=Category::orderBy('name')->get();
        return view('front.home',$data);
    }
    public function blog_details($id)
    {
     // $data['blog_details']=Post::findOrFail($id);
        $posts=Post::findOrFail($id);
        $data['blog_details']=$posts;
        $posts->increment('total_view');

      $data['featured_post']=Post::where('is_featured',1)->where('status','published')->limit(2)->latest()->get();
      $data['recent_post']=Post::with('category','author')->where('status','published')->limit(4)->latest()->get();
      //$data['categories']=Category::orderBy('name')->get();
        return view('front.blog.details',$data);
    }
    public function category_post($id)
    {
       $data['posts']=Post::with('category','author')->where('category_id',$id)->orderBy('id','DESC')->get();
       $data['category']=Category::findOrFail($id);
       return view('front.blog.category_posts',$data);
    }
}
