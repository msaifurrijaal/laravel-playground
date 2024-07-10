<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "User",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni voluptatem architecto laborum perferendis officia doloribus ea nihil illum. Maiores quo dolore doloribus unde recusandae velit dolorem itaque rerum fugiat illum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "User 2",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni voluptatem architecto laborum perferendis officia doloribus ea nihil illum. Maiores quo dolore doloribus unde recusandae velit dolorem itaque rerum fugiat illum!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
