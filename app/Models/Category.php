<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}

// Category::create([
//     'name' => 'Web Programming',
//     'slug' => 'web-programming'

// ])

// Post::create([
//     'title'=>'Postingan ketiga',
//     'category_id'=> '2',
//     'slug'=>'postingan-ketiga',
//     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed reiciendis suscipit quia aliquam excepturi expedita illo? Earum quis, illum ducimus obcaecati recusandae aut fuga aliquid, doloribus accusamus iste reiciendis? Ad.',
//     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore nostrum perspiciatis, illo non facere eos, quos qui sint quisquam voluptatum facilis officia dignissimos ipsam, vitae libero aliquid cupiditate repellat molestias in voluptas quidem exercitationem deleniti ad. Id quidem expedita consequatur minus at, molestias vero obcaecati fuga, blanditiis cum excepturi quam harum mollitia! Suscipit impedit voluptatibus beatae excepturi dicta nam, incidunt rem non expedita architecto ut odio ab adipisci inventore natus ea hic assumenda illo corrupti ullam perspiciatis iure! Perspiciatis a mollitia reprehenderit nihil, quae exercitationem dolore fugit inventore eveniet placeat nobis nostrum expedita corrupti magni. Nihil sed culpa itaque quam!'
// ])
