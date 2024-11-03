<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' =>'HomePage']);
});
Route::get('/about', function () {
    return view('about', ['nama' =>'jita'],['title' =>'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' =>'Blog','posts'=>[
        [
            'id'=>1,
            'slug' => 'judul-artikel-1',
            'title'=> 'Judul Artikel 1',
            'author'=> 'jita',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis, autem vero reprehenderit sed maiores ullam vel odio, eos cumque expedita odit repellat itaque aliquam illo, suscipit voluptate illum. Inventore?',
        ],
        [
            'id'=> 2,
            'slug'=> 'judul-artikle-2',
            'title'=> 'Judul Artikel 2',
            'author'=> 'jita',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis, autem vero reprehenderit sed maiores ullam vel odio, eos cumque expedita odit repellat itaque aliquam illo, suscipit voluptate illum. Inventore?',
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id'=>1,
            'slug' => 'judul-artikel-1',
            'title'=> 'Judul Artikel 1',
            'author'=> 'jita',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis, autem vero reprehenderit sed maiores ullam vel odio, eos cumque expedita odit repellat itaque aliquam illo, suscipit voluptate illum. Inventore?',
        ],
        [
            'id'=> 2,
            'slug' => 'judul-artikel-2',
            'title'=> 'Judul Artikel 2',
            'author'=> 'jita',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis, autem vero reprehenderit sed maiores ullam vel odio, eos cumque expedita odit repellat itaque aliquam illo, suscipit voluptate illum. Inventore?',
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title'=> 'Single Post','post'=> $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' =>'Contact']);
});