<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abaddon',
            'username' => 'Abaddon',
            'email' => 'abaddon@gmail.com',
            'password' => bcrypt('Abaddon')
        ]);

        // User::create([
        //     'name' => 'Sofyan',
        //     'email' => 'sofyan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi, mollitia, in, beatae quo libero eveniet voluptatem accusamus quae optio. Ex mollitia quam earum? Quo ex obcaecati iste iure expedita ut nisi fugiat quasi. Commodi, eum similique. Porro autem temporibus molestias quo, ex consequuntur est cupiditate facilis recusandae necessitatibus, nihil molestiae vitae. At quas autem ipsum voluptates, repellat vel sint id, perferendis est rem ab? Minima ratione corporis similique quae quis dolor laudantium accusantium fuga saepe facere, repudiandae sed impedit ea. Cum dolores aperiam aspernatur facilis soluta ab ut, totam voluptas dignissimos nobis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi, mollitia, in, beatae quo libero eveniet voluptatem accusamus quae optio. Ex mollitia quam earum? Quo ex obcaecati iste iure expedita ut nisi fugiat quasi. Commodi, eum similique. Porro autem temporibus molestias quo, ex consequuntur est cupiditate facilis recusandae necessitatibus, nihil molestiae vitae. At quas autem ipsum voluptates, repellat vel sint id, perferendis est rem ab? Minima ratione corporis similique quae quis dolor laudantium accusantium fuga saepe facere, repudiandae sed impedit ea. Cum dolores aperiam aspernatur facilis soluta ab ut, totam voluptas dignissimos nobis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi, mollitia, in, beatae quo libero eveniet voluptatem accusamus quae optio. Ex mollitia quam earum? Quo ex obcaecati iste iure expedita ut nisi fugiat quasi. Commodi, eum similique. Porro autem temporibus molestias quo, ex consequuntur est cupiditate facilis recusandae necessitatibus, nihil molestiae vitae. At quas autem ipsum voluptates, repellat vel sint id, perferendis est rem ab? Minima ratione corporis similique quae quis dolor laudantium accusantium fuga saepe facere, repudiandae sed impedit ea. Cum dolores aperiam aspernatur facilis soluta ab ut, totam voluptas dignissimos nobis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse repellendus architecto voluptates dolorem iste atque modi, mollitia, in, beatae quo libero eveniet voluptatem accusamus quae optio. Ex mollitia quam earum? Quo ex obcaecati iste iure expedita ut nisi fugiat quasi. Commodi, eum similique. Porro autem temporibus molestias quo, ex consequuntur est cupiditate facilis recusandae necessitatibus, nihil molestiae vitae. At quas autem ipsum voluptates, repellat vel sint id, perferendis est rem ab? Minima ratione corporis similique quae quis dolor laudantium accusantium fuga saepe facere, repudiandae sed impedit ea. Cum dolores aperiam aspernatur facilis soluta ab ut, totam voluptas dignissimos nobis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
