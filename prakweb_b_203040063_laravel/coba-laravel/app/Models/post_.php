<?php

namespace App\Models;



class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yulius Yogi Yuwono",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, quo! Quibusdam reiciendis ex cupiditate dignissimos, numquam facere adipisci cumque quaerat distinctio libero laboriosam pariatur, natus laborum! Blanditiis deserunt odio fuga neque ratione rerum fugit similique qui necessitatibus? Dignissimos reprehenderit itaque quod ad, temporibus suscipit quisquam repellendus, similique possimus ut dolorum."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yulius Yogi Yuwono",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo obcaecati quibusdam saepe quam hic sunt. Dolorem ratione minus recusandae nisi sunt, quas, beatae ea culpa aliquam ipsum nihil saepe quidem debitis nam temporibus delectus quo. Eveniet accusamus cupiditate iure nostrum corporis culpa quasi aperiam quos laborum officia eaque doloremque deserunt atque praesentium, natus quo ullam illum neque modi unde voluptatum veniam accusantium esse! Ipsam animi reiciendis possimus dolorem debitis consequatur aspernatur, voluptatibus obcaecati sed facilis eveniet temporibus eos, unde veritatis laudantium. Fugiat, facere velit? Enim consectetur explicabo quasi nostrum, excepturi qui eaque sunt nesciunt. Molestias aliquam aperiam consectetur facere corrupti?"
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
