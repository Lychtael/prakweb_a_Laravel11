<?php 
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
        ];
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (! $post) {
            abort(404);
        }
        return $post;
    }
}