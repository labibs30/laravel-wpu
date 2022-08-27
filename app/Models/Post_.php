<?php

namespace App\Models;

class Post
{
    private static $blog_post =  [
        [
            "title" => "Judul Post Pertama",
            "author" => "M Labib Alfaraby",
            "slug" => "Judul Post Pertama",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Quae suscipit tenetur deleniti dicta delectus, sit quia, 
            similique totam omnis blanditiis ut temporibus officia neque et 
            libero exercitationem eius aspernatur eos?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "M Labib Alfaraby 2",
            "slug" => "Judul Post Kedua",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Quae suscipit tenetur deleniti dicta delectus, sit quia, 
            similique totam omnis blanditiis ut temporibus officia neque et 
            libero exercitationem eius aspernatur eos?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){

        $posts = static::all();
        // $new_post = [];

        // foreach ($posts as $post){
        //     if($post["slug"] === $slug){
        //         $new_post = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
