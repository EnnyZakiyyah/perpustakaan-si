<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Katalog
{
    private static $blog_katalogs = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "J.K Rowling",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, quo totam? Dolore asperiores alias quod tempore! Modi in voluptate asperiores fuga nisi explicabo. Nostrum commodi, id harum optio obcaecati odio!",
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "J.K Rowling",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, quo totam? Dolore asperiores alias quod tempore! Modi in voluptate asperiores fuga nisi explicabo. Nostrum commodi, id harum optio obcaecati odio!",
        ],
        [
            "title" => "Judul Tulisan Ketiga",
            "slug" => "judul-tulisan-ketiga",
            "author" => "J.K Rowling",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, quo totam? Dolore asperiores alias quod tempore! Modi in voluptate asperiores fuga nisi explicabo. Nostrum commodi, id harum optio obcaecati odio!",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_katalogs);
    }

    public static function find($slug)
    {
        $katalogs = static::all();
        return $katalogs->firstWhere('slug', $slug);
    }
}
