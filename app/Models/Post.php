<?php

namespace App\Models;

class Post 
{
    private static $blog_post =   [
        [
            "title" => "Belajar Laravel 1.0.0",
            "slug" => "belajar-laravel-1.0.0",
            "author" => "Kevin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, aspernatur! Expedita, quisquam? Enim, odit illum, consequatur quas reiciendis architecto nobis ipsum quia ab minima voluptatum? Quidem corrupti harum atque ullam aspernatur distinctio sed natus, soluta pariatur sit minus maiores voluptates libero nesciunt similique, repudiandae ducimus ea exercitationem sunt facere tenetur voluptate laboriosam quo inventore. Voluptatem reiciendis nisi, quam nam sapiente repudiandae atque placeat maiores at explicabo ab natus obcaecati consectetur possimus sunt sint incidunt. Minima, iste? Blanditiis ipsum quaerat dignissimos!"
        ],
        [
            "title" => "Belajar Laravel 1.0.1",
            "slug" => "belajar-laravel-1.0.1",
            "author" => "Mikhael",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a ex, cupiditate assumenda laboriosam harum, eius odit provident optio debitis tempore ut suscipit facilis quaerat nemo qui! Repudiandae aspernatur culpa quis aliquam atque accusamus vitae, architecto quod sit iusto officiis similique distinctio voluptas impedit nemo. Sed aliquid quam, pariatur distinctio quibusdam porro voluptas quis magni qui! Ad vitae qui natus labore ea soluta laudantium, impedit exercitationem et a similique non doloremque repellat quo aperiam voluptates cum porro facere optio. Hic quam corrupti veniam tenetur repellendus nihil deleniti corporis reiciendis dolor dolores, totam voluptate fugit aperiam harum error omnis cumque nesciunt."
        ]
    ];

    public static function all()
    {
        return collect (self::$blog_post);
    }

    public static function find($slug)
    {
        $post=static::all();
        return $post->firstWhere('slug', $slug);
    }
}
