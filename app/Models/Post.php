<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Post
{
    private static $blog_post = [
        [
            "judul_postingan" => "Web Zakat",
            "slug" => "web-zakat",
            "gambar" => "kucing.jpg",
            "author" => "Fairuz Musyaffa",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Excepturi sequi accusamus quia dolorum aut quod? Rerum molestiae modi 
        iste. Nesciunt ex ipsam aperiam? Non quidem a magni earum at? Laboriosam 
        ullam accusamus dolorem veritatis dolores, tempora quos rerum maiores fuga 
        voluptas nobis impedit sapiente sed quas cupiditate omnis distinctio provident sint harum. 
        Similique nisi explicabo obcaecati neque consequatur. Beatae dolorum tempore porro ipsum neque 
        totam quos rem pariatur maxime repellat?"
        ],
        [
            "judul_postingan" => "Bismillah Bisa",
            "slug" => "Bismillah-Bisa",
            "gambar" => "test.jpg",
            "author" => "Muhammad Fairuz Musyaffa",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Excepturi sequi accusamus quia dolorum aut quod? Rerum molestiae modi 
        iste. Nesciunt ex ipsam aperiam? Non quidem a magni earum at? Laboriosam 
        ullam accusamus dolorem veritatis dolores, tempora quos rerum maiores fuga 
        voluptas nobis impedit sapiente sed quas cupiditate omnis distinctio provident sint harum. 
        Similique nisi explicabo obcaecati neque consequatur. Beatae dolorum tempore porro ipsum neque 
        totam quos rem pariatur maxime repellat?"
        ]
    ];

    public static function all()
    {
        //menampilkan seluruh data
        return collect(Self::$blog_post);
    }

    public static function find($slug)
    {
        $postingan =  static::all();
        // menampilkan data berdasarkan slug
        return $postingan->firstWhere('slug', $slug);
    }
}
