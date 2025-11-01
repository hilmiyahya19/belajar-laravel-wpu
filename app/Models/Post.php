<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [   
                'id' => 1,
                'slug' => 'understanding-laravel',
                'title' => 'Understanding Laravel: A Modern PHP Framework for Web Development',
                'author' => 'Hilmi Yahya',
                'body' => "Laravel is a modern PHP framework known for its elegant syntax and powerful features. It simplifies building secure and scalable web applications with tools like routing, middleware, authentication, and Eloquent ORM. Following the MVC pattern, Laravel helps keep code clean and maintainable. With strong security, API support, and great documentation, Laravel remains a top choice for developers."
            ],
            [
                'id' => 2,
                'slug' => 'mastering-blade',
                'title' => 'Mastering Blade: Laravel’s Efficient and Elegant Templating Engine',
                'author' => 'Hilmi Yahya',
                'body' => "Blade is Laravel’s lightweight and expressive templating engine for building dynamic user interfaces. It offers clean syntax, template inheritance, reusable components, and helpful directives like @if and @foreach. Blade also escapes output for security and supports custom components to keep views simple and maintainable, making UI development faster and more organized."
            ],
        ];
    }

    public static function find($slug): array {

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}