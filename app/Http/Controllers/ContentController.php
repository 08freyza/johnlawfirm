<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // Index
    public function index()
    {
        $services = Service::allService();
        $recommendationArticle = Article::recommendationArticle();

        $data = [
            'services' => $services,
            'recommendationArticle' => $recommendationArticle
        ];

        return view('home', $data);
    }

    // About
    public function about()
    {
        return view('about');
    }

    // Contact
    public function contact()
    {
        return view('contact');
    }

    // Lawyers
    public function lawyers()
    {
        return view('lawyers');
    }

    // Services
    public function services()
    {
        $services = Service::allService();

        $data = [
            'services' => $services
        ];

        return view('services', $data);
    }

    // Galleries
    public function galleries()
    {
        $data = [
            // 'services' => $services
        ];

        return view('galleries', $data);
    }

    // Articles
    public function article()
    {
        $articles = Article::allArticle();

        $data = [
            'articles' => $articles
        ];

        return view('article.index', $data);
    }

    public function articleDetail($id, $title)
    {
        $articleDetail = Article::getArticle($id, $title);
        $recommendationArticle = Article::recommendationArticleDetail($id);

        $data = [
            'articleDetail' => $articleDetail,
            'recommendationArticle' => $recommendationArticle
        ];

        return view('article.detail', $data);
    }
}
