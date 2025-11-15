<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\HomepageSlider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function Home() {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        $sliders = HomepageSlider::all();
        $categories = Category::all();
        $latestArticle = Article::latest('date')->first();
        $brands = Brand::all();
        $latestNews = News::latest('date')->first();
        return view('home.home', compact('sliders', 'categories', 'latestArticle', 'brands', "latestNews"));
    }

    public function YTRSS() {
        $rssUrl = "https://www.youtube.com/feeds/videos.xml?channel_id=UCd8KRACyffIjxQKbmquxgXg";

        try {
            $response = Http::timeout(10)->get($rssUrl);

            if ($response->failed()) {
                \Log::error('YouTube RSS Fetch Failed: '.$response->status().' - '.$response->body());
                return response()->json([
                    'error' => 'Failed to fetch YouTube RSS feed.',
                    'status' => $response->status(),
                    'body' => $response->body(),
                ], 500);
            }

            return response($response->body(), 200)->header('Content-Type', 'application/xml');

        } catch (\Exception $e) {
            \Log::error('YouTube RSS Exception: '.$e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
