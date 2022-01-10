<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Aladino Zulmar',
            'username' => 'aladinozulmar',
            'email' => 'aladinozulmar@gmail.com',
            'password' => bcrypt('Aladino123')
        ]);

        // User::create([
        //     'name' => 'Angga Saputra',
        //     'email' => 'angga_sa@gmail.com',
        //     'password' => bcrypt('Angga_sa1')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Operating System',
            'slug' => 'operating-system'
        ]);

        Category::create([
            'name' => 'Networking',
            'slug' => 'networking'
        ]);

        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);

        Category::create([
            'name' => 'Hiburan',
            'slug' => 'hiburan'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'title' => 'Belajar Python Untuk Pemula',
        //     'slug' => 'belajar-python-untuk-pemula',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio, delectus accusantium, minima voluptates et quas eius alias adipisci aspernatur enim iure explicabo sed repellat debitis vero veritatis quia facere. Ipsa cumque, repudiandae id minima itaque nam quidem illum consequatur. Sequi excepturi quidem aut</p><p>Illo molestiae deserunt doloribus laboriosam! Quam veritatis animi ipsum exercitationem tempore voluptatibus, in corporis repudiandae rem. Id, vero asperiores, ratione obcaecati reprehenderit accusantium nulla soluta, accusamus nisi deleniti officia? Deserunt sapiente atque quisquam fuga eum, labore ducimus porro repudiandae nemo autem esse numquam rerum sed. Facere libero odit atque sit tenetur quibusdam laboriosam adipisci numquam provident deserunt. Voluptates velit, optio modi nam iusto id, consequatur accusamus voluptatem, ratione harum qui hic porro eveniet corrupti quasi officiis enim recusandae laborum cum voluptas quod distinctio quas. Soluta sint reprehenderit sequi laborum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Perintah Dasar Cisco Packet Tracer',
        //     'slug' => 'belajar-cisco-packet-tracer',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio, delectus accusantium, minima voluptates et quas eius alias adipisci aspernatur enim iure explicabo sed repellat debitis vero veritatis quia facere. Ipsa cumque, repudiandae id minima itaque nam quidem illum consequatur. Sequi excepturi quidem aut</p><p>Illo molestiae deserunt doloribus laboriosam! Quam veritatis animi ipsum exercitationem tempore voluptatibus, in corporis repudiandae rem. Id, vero asperiores, ratione obcaecati reprehenderit accusantium nulla soluta, accusamus nisi deleniti officia? Deserunt sapiente atque quisquam fuga eum, labore ducimus porro repudiandae nemo autem esse numquam rerum sed. Facere libero odit atque sit tenetur quibusdam laboriosam adipisci numquam provident deserunt. Voluptates velit, optio modi nam iusto id, consequatur accusamus voluptatem, ratione harum qui hic porro eveniet corrupti quasi officiis enim recusandae laborum cum voluptas quod distinctio quas. Soluta sint reprehenderit sequi laborum.</p>',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);


        // Post::create([
        //     'title' => 'Konfigurasi Web Server di Debian 9',
        //     'slug' => 'web-server-debian-9',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At non rerum inventore recusandae quisquam aut eum laborum earum. Dolorum illum repellendus animi ipsam, asperiores dolor eveniet optio, delectus accusantium, minima voluptates et quas eius alias adipisci aspernatur enim iure explicabo sed repellat debitis vero veritatis quia facere. Ipsa cumque, repudiandae id minima itaque nam quidem illum consequatur. Sequi excepturi quidem aut</p><p>Illo molestiae deserunt doloribus laboriosam! Quam veritatis animi ipsum exercitationem tempore voluptatibus, in corporis repudiandae rem. Id, vero asperiores, ratione obcaecati reprehenderit accusantium nulla soluta, accusamus nisi deleniti officia? Deserunt sapiente atque quisquam fuga eum, labore ducimus porro repudiandae nemo autem esse numquam rerum sed. Facere libero odit atque sit tenetur quibusdam laboriosam adipisci numquam provident deserunt. Voluptates velit, optio modi nam iusto id.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);








    }
}
