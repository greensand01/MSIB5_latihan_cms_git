<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NEWSS 
{
     
    private static $blog_posts = [
        [
           "title" => "tumis kangkung",
           "slug" => "NEWS PERTAMA",
           "author" => "putra",
           "conten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta voluptas sed doloremque ipsam magnam voluptatem maiores est ipsa perferendis voluptate id laboriosam commodi sapiente autem repellendus nesciunt, totam necessitatibus ad ipsum dolorem quo expedita. Officiis tempora, vero dolor iure expedita non corrupti explicabo et doloribus rem reprehenderit totam beatae. Quaerat!"
        ],
       
        [
           "title" => "masak bayam",
           "slug" => "NEWS KEDUA",
           "author" => "SAMUELS",
           "conten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima voluptatibus maxime quasi odit quisquam, qui deleniti eius autem sit earum, sapiente perspiciatis commodi dolores id quod reiciendis ipsa provident, nostrum voluptate excepturi. Fuga mollitia quisquam modi unde laboriosam ipsa! Architecto deserunt est aliquid pariatur explicabo blanditiis, accusamus sint sit reprehenderit quaerat veniam laudantium illo nobis ad, quos eum ducimus, quis sapiente in eius officia! Incidunt quas nesciunt vero cum eum natus neque quaerat molestiae beatae recusandae magnam repellat, ipsa velit quasi aspernatur eos consequatur enim dolores. Fugit est inventore quisquam consectetur neque non et! Repellat, placeat dignissimos. Eveniet error laboriosam incidunt praesentium corrupti at asperiores minus dicta saepe, optio placeat rem exercitationem sit consequatur inventore distinctio, quidem temporibus quia omnis soluta, laborum eius sunt cum. Non enim voluptatem tenetur impedit praesentium. Eius vero maxime nostrum quas, sapiente placeat soluta eaque. Incidunt dolorem aliquam temporibus! Nihil voluptate officia, tenetur veniam dolor blanditiis optio. Ratione vitae deserunt officiis reiciendis cumque commodi molestiae earum debitis maiores mollitia fugiat soluta quidem deleniti a repellat adipisci quibusdam impedit, omnis aspernatur ut illo natus. Natus impedit deleniti, veritatis dolorem doloribus animi fugit adipisci eligendi quidem, facilis molestias dicta ipsum nesciunt accusantium itaque. Expedita, officiis ab?"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts); 
        }


        public static function find($slug)
        {
         $posts = static::all();
        //  $post = [];
        //  foreach ($posts as $p) {
        //      if($p["slug"] === $slug){
        //          $post = $p;
        //      }
        //  }
 
        return $posts->firstwhere('slug', $slug);
      }
}
