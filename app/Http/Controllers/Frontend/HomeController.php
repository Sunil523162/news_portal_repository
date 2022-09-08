<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $latest_posts;
    public $popular_posts;

    public function __construct()
    {
        $this->latest_posts =  Post::latest()->take(4)->get();
        $this->popular_posts = Post::where('is_popular', '=', 1)->take(6)->get();
    }
    public function landingpage()
    {
        $post_categories = PostCategory::with('post')->get();
        $posts = Post::where('flash_post', '!=', 1)->take(4)->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $flash_post = Post::where('flash_post', '=', 1)->latest()->first();
        $politic_posts = PostCategory::where('name', 'Politics')->with('post')->take(4)->get();
        $business_posts = PostCategory::where('id', 2)->with('post')->take(4)->get();
        $tech_posts = PostCategory::where('id', 3)->with('post')->take(4)->get();
        $sport_posts = PostCategory::where('id', 7)->with('post')->take(4)->get();
        $culture_posts = PostCategory::where('id', 8)->with('post')->take(4)->get();
        $health_posts = PostCategory::where('id', 6)->with('post')->take(4)->get();
        $videos = PostCategory::where('id',10)->with('post')->take(4)->get();
        // $video = Video::all();
        $news_posts = PostCategory::where('id', 9)->with('post')->take(4)->get();
        // return $politic_posts;
        return view(
            'frontend.landingpage',
            compact(
                'post_categories',
                'latest_posts',
                'posts',
                'popular_posts',
                'featured_posts',
                'flash_post',
                'politic_posts',
                'business_posts',
                'tech_posts',
                'sport_posts',
                'culture_posts',
                'health_posts',
                'videos',
            )
        );
    }

    public function business()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $business_posts = PostCategory::where('id', 2)->with('post')->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.business', compact('latest_posts', 'business_posts', 'popular_posts','featured_posts'));
    }
    public function politics()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $politic_posts = PostCategory::where('id', 1)->with('post')->get();
        $popular_posts = $this->popular_posts;
        $latest_posts = $this->latest_posts;
        return view('frontend.politics', compact('latest_posts', 'popular_posts', 'politic_posts', 'featured_posts'));
    }
    public function sport()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $sport_posts = PostCategory::where('id', 7)->with('post')->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.sport', compact('latest_posts', 'popular_posts', 'sport_posts', 'featured_posts'));
    }
    public function technology()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $tech_posts = PostCategory::where('id', 3)->with('post')->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.tech', compact('latest_posts', 'popular_posts', 'tech_posts', 'featured_posts'));
    }
    public function culture()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $culture_posts = PostCategory::where('id', 8)->with('post')->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.culture', compact('latest_posts', 'popular_posts', 'culture_posts', 'featured_posts'));
    }
    public function news()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $news_posts = PostCategory::where('name', 'News')->with('post')->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.news', compact('latest_posts', 'popular_posts', 'news_posts', 'featured_posts'));
    }
    // public function video()
    // {
    //     $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
    //     $videos = PostCategory::where('name', 'video')->with('post')->get();
    //     $latest_posts = $this->latest_posts;
    //     $popular_posts = $this->popular_posts;
    //     return view('frontend.video', compact('latest_posts', 'popular_posts', 'videos', 'featured_posts'));
    // }
    public function video()
    {
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $videos = Video::all();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.video', compact('latest_posts', 'popular_posts', 'videos', 'featured_posts'));
    }
    public function single($slug)
    {
        // dd($slug);
        $individual_post = Post::where('slug', $slug)->first();
        $featured_posts = Post::where('is_featured', '=', 1)->take(3)->get();
        $latest_posts = $this->latest_posts;
        $popular_posts = $this->popular_posts;
        return view('frontend.single', compact('latest_posts', 'popular_posts', 'individual_post', 'featured_posts'));
    }

    public function search(Request $request)
    {
        $latest_posts = $this->latest_posts;
        $keyword = $request->search;
        $data = Post::when($keyword, function ($query) use ($keyword) {
            $query->where('heading', "LIKE", '%' . $keyword . '%');
        })->orderBy('id', 'desc')->paginate(10);
        return view('frontend.search', compact('data','latest_posts'));
    }

}
