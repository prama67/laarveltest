<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan
{
   private static $blog_post = [
    [
        "title" => "cara membuat adonan",
        "slug" => "CARA-MEMBUAT-ADONAN",
        "by" => "ramaz acyutax",
        "isi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro atque perspiciatis eum. Ducimus placeat vitae sunt inventore fuga officiis molestiae saepe est ex! Iure fuga saepe corrupti quae, voluptatum ab soluta neque, beatae natus molestiae, assumenda non quidem at cupiditate impedit officia vel similique eos tempore eligendi qui error exercitationem laborum ratione! Debitis ipsa quaerat neque fuga. Voluptatibus, cupiditate ullam."
    ],

    [
        "title" => "cara kerja anjing",
        "slug" => "CARA-KERJA-ANJING",
        "by" => "kepala bapak kau",
        "isi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro atque perspiciatis eum. Ducimus placeat vitae sunt inventore fuga officiis molestiae saepe est ex! Iure fuga saepe corrupti quae, voluptatum ab soluta neque, beatae natus molestiae, assumenda non quidem at cupiditate impedit officia vel similique eos tempore eligendi qui error exercitationem laborum ratione! Debitis ipsa quaerat neque fuga. Voluptatibus, cupiditate ullam."
    ]
];

public static function all()

{
    return collect(self::$blog_post);
}



    public static function find($slug)
    
    {
        $postingan = static::all();

        
// ini untuk ribet nya
//             $new_post = [];
//     foreach($postingan as $p){
//     if($p["slug"] === $slug) {
//         $new_post = $p;
//     }
// }

return $postingan->firstWhere('slug',$slug);



    }
}
