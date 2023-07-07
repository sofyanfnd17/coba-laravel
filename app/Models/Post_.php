<?php

namespace App\Models;

class Post
{
    static private $blog_posts = [
        [
            "title"     => "Lorem Ipsum",
            "slug"      => "Lorem-Ipsum",
            "author"    => "Rukman",
            "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint earum vel optio, illo consectetur nam numquam dolore accusamus, et aspernatur repellendus veniam ratione quisquam dolorem corrupti distinctio molestias debitis iusto blanditiis, sapiente cumque. Ducimus dolorum rerum natus ab ad voluptates, aperiam saepe commodi, perferendis id tempore sunt ipsa unde modi voluptatem illum quod quaerat nam aspernatur harum dolores consequuntur."
        ],
        [
            "title"     => "Dolor Sit Amet",
            "slug"      => "Dolor-Sit-Amet",
            "author"    => "Cakiman",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, porro? Nostrum repellendus quaerat labore quia vel, voluptatum harum excepturi molestiae laboriosam ea, ducimus nam explicabo incidunt voluptas mollitia magnam eligendi consequatur vero veritatis eveniet, facere odio natus non? Facilis tempore cupiditate dolorum sequi autem harum voluptatum et obcaecati, ducimus, velit quos saepe reiciendis? Tenetur voluptatem doloribus a? Omnis possimus, ratione porro placeat architecto fuga amet ullam atque eaque praesentium magnam illum fugit quas rerum, maiores veritatis quisquam cupiditate aspernatur voluptas, quam similique doloribus eveniet. Et incidunt minus laboriosam recusandae id ipsam? Voluptate, neque! Sint recusandae maxime aliquid quisquam, quas nisi corporis dolores illum quidem? Voluptatibus suscipit enim ullam labore tempore aut aspernatur iusto debitis officia neque ipsum corporis est, cum fugiat tempora ut ab quasi nihil corrupti? Libero similique neque veniam suscipit amet perspiciatis pariatur. Ipsa alias ipsam omnis et enim possimus minus nemo, aut minima, nesciunt temporibus iure earum."
        ]
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
