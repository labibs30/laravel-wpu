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
        User::create([
            'name'=>'M Labib Alfaraby',
            'username'=>'labibalfa',
            'email'=>'labibddada@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        User::factory(3)->create();
        // User::create([
        //     'name'=>'M Labib Alfaraby2',
        //     'email'=>'labibddada2@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        Category::create([
            'name'=>'Programming',
            'slug'=>'programming'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        Category::create([
            'name'=>'Cooking',
            'slug'=>'cooking'
        ]);
        Post::factory(25)->create();

        // Post::create([
        //     'title'=>'Web dev programming',
        //     'slug'=>'web-dev-programming',
        //     'user_id'=>1,
        //     'category_id'=>1,
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore quod nisi vero possimus voluptatibus, consequatur quo unde id accusamus quia eaque praesentium. Deleniti asperiores voluptate, tenetur nihil rem perferendis!',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo incidunt aut, adipisci voluptatum nulla dolorem atque ipsum quos vitae dolores animi. Doloremque laudantium beatae nam assumenda natus quisquam facilis molestias exercitationem vel dolorem dicta, minima consequuntur ipsam omnis voluptatum corporis, nobis perferendis odio repudiandae molestiae! Esse ipsa, aliquid nemo saepe porro quaerat consequuntur, ea fuga modi recusandae minima, architecto labore provident totam eligendi officia quis cupiditate iusto? Soluta, tenetur quia! Distinctio rerum fugit tempore? Quidem voluptatum repudiandae optio deleniti blanditiis ea assumenda libero amet vitae in exercitationem mollitia quas alias aut aperiam maiores recusandae, culpa suscipit commodi? Dicta, dolorem necessitatibus?'
        // ]);
        // Post::create([
        //     'title'=>'Web dev programming2',
        //     'slug'=>'web-dev-programming2',
        //     'user_id'=>2,
        //     'category_id'=>1,
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore quod nisi vero possimus voluptatibus, consequatur quo unde id accusamus quia eaque praesentium. Deleniti asperiores voluptate, tenetur nihil rem perferendis!',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo incidunt aut, adipisci voluptatum nulla dolorem atque ipsum quos vitae dolores animi. Doloremque laudantium beatae nam assumenda natus quisquam facilis molestias exercitationem vel dolorem dicta, minima consequuntur ipsam omnis voluptatum corporis, nobis perferendis odio repudiandae molestiae! Esse ipsa, aliquid nemo saepe porro quaerat consequuntur, ea fuga modi recusandae minima, architecto labore provident totam eligendi officia quis cupiditate iusto? Soluta, tenetur quia! Distinctio rerum fugit tempore? Quidem voluptatum repudiandae optio deleniti blanditiis ea assumenda libero amet vitae in exercitationem mollitia quas alias aut aperiam maiores recusandae, culpa suscipit commodi? Dicta, dolorem necessitatibus?'
        // ]);
        // Post::create([
        //     'title'=>'Web dev programming3',
        //     'slug'=>'web-dev-programming3',
        //     'user_id'=>1,
        //     'category_id'=>1,
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore quod nisi vero possimus voluptatibus, consequatur quo unde id accusamus quia eaque praesentium. Deleniti asperiores voluptate, tenetur nihil rem perferendis!',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo incidunt aut, adipisci voluptatum nulla dolorem atque ipsum quos vitae dolores animi. Doloremque laudantium beatae nam assumenda natus quisquam facilis molestias exercitationem vel dolorem dicta, minima consequuntur ipsam omnis voluptatum corporis, nobis perferendis odio repudiandae molestiae! Esse ipsa, aliquid nemo saepe porro quaerat consequuntur, ea fuga modi recusandae minima, architecto labore provident totam eligendi officia quis cupiditate iusto? Soluta, tenetur quia! Distinctio rerum fugit tempore? Quidem voluptatum repudiandae optio deleniti blanditiis ea assumenda libero amet vitae in exercitationem mollitia quas alias aut aperiam maiores recusandae, culpa suscipit commodi? Dicta, dolorem necessitatibus?'
        // ]);
        // Post::create([
        //     'title'=>'Making Tekwan',
        //     'slug'=>'making-tekwan',
        //     'user_id'=>1,
        //     'category_id'=>3,
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore quod nisi vero possimus voluptatibus, consequatur quo unde id accusamus quia eaque praesentium. Deleniti asperiores voluptate, tenetur nihil rem perferendis!',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo incidunt aut, adipisci voluptatum nulla dolorem atque ipsum quos vitae dolores animi. Doloremque laudantium beatae nam assumenda natus quisquam facilis molestias exercitationem vel dolorem dicta, minima consequuntur ipsam omnis voluptatum corporis, nobis perferendis odio repudiandae molestiae! Esse ipsa, aliquid nemo saepe porro quaerat consequuntur, ea fuga modi recusandae minima, architecto labore provident totam eligendi officia quis cupiditate iusto? Soluta, tenetur quia! Distinctio rerum fugit tempore? Quidem voluptatum repudiandae optio deleniti blanditiis ea assumenda libero amet vitae in exercitationem mollitia quas alias aut aperiam maiores recusandae, culpa suscipit commodi? Dicta, dolorem necessitatibus?'
        // ]);
        // Post::create([
        //     'title'=>'Making Tekwan2',
        //     'slug'=>'making-tekwan2',
        //     'user_id'=>1,
        //     'category_id'=>3,
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempore quod nisi vero possimus voluptatibus, consequatur quo unde id accusamus quia eaque praesentium. Deleniti asperiores voluptate, tenetur nihil rem perferendis!',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo incidunt aut, adipisci voluptatum nulla dolorem atque ipsum quos vitae dolores animi. Doloremque laudantium beatae nam assumenda natus quisquam facilis molestias exercitationem vel dolorem dicta, minima consequuntur ipsam omnis voluptatum corporis, nobis perferendis odio repudiandae molestiae! Esse ipsa, aliquid nemo saepe porro quaerat consequuntur, ea fuga modi recusandae minima, architecto labore provident totam eligendi officia quis cupiditate iusto? Soluta, tenetur quia! Distinctio rerum fugit tempore? Quidem voluptatum repudiandae optio deleniti blanditiis ea assumenda libero amet vitae in exercitationem mollitia quas alias aut aperiam maiores recusandae, culpa suscipit commodi? Dicta, dolorem necessitatibus?'
        // ]);

    }
}
