<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Izzafi ramdhani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quisquam facilis iure minima enim praesentium explicabo unde excepturi perspiciatis, eum fugit itaque sequi deserunt totam quaerat maxime distinctio. Voluptates libero, consequatur dolorem dolores expedita beatae nihil enim minus praesentium sed dolore similique nostrum natus hic quam commodi harum! Cumque molestiae recusandae tenetur tempora hic cum aut itaque repellendus magnam, numquam, inventore earum laborum provident quis magni illum quidem ipsam ducimus exercitationem odit ab? Labore excepturi nesciunt, eligendi culpa ipsum neque!"
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mike wazowski",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quisquam facilis iure minima enim praesentium explicabo unde excepturi perspiciatis, eum fugit itaque sequi deserunt totam quaerat maxime distinctio. Voluptates libero, consequatur dolorem dolores expedita beatae nihil enim minus praesentium sed dolore similique nostrum natus hic quam commodi harum! Cumque molestiae recusandae tenetur tempora hic cum aut itaque repellendus magnam, numquam, inventore earum laborum provident quis magni illum quidem ipsam ducimus exercitationem odit ab? Labore excepturi nesciunt, eligendi culpa ipsum neque!"
        ],
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
