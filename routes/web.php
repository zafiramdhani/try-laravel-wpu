<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home', [
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view('about', [
    "title" => "About",
    "name" => "Izzafi Ramdhani Al-kaff",
    "email" => "izzafiramdhanialkaff@gmail.com",
    "image" => "profile.jpg"
  ]);
});

Route::get('/blog', function () {
  $blog_posts = [
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

  return view('posts', [
    "title" => "Posts",
    "posts" => $blog_posts
  ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
  $blog_posts = [
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

  $new_post = [];
  foreach ($blog_posts as $post) {
    if ($post["slug"] === $slug) {
      $new_post = $post;
    }
  }

  return view('post', [
    "title" => "Single post",
    "post" => $new_post
  ]);
});