<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $article = Article::create([
            'title' => 'Enfant madeleine',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 1,
            'validated' => 1
        ]);

        $article->categories()->attach(1);

        $article = Article::create([
            'title' => 'Maman madeleine',
            'content' => 'LLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 1,
            'validated' => 1
        ]);

        $article->categories()->attach(1);

        $article = Article::create([
            'title' => 'Papa madeleine',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 2,
            'validated' => 1
        ]);

        $article->categories()->attach(1);

        $article = Article::create([
            'title' => 'GRand papa madeleine',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 2,
            'validated' => 1
        ]);

        $article->categories()->attach(1);

        $article = Article::create([
            'title' => 'Grande maman madeleine',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 1,
            'validated' => 1
        ]);

        $article->categories()->attach(1);

        $article = Article::create([
            'title' => 'Petit fils madeleine',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nunc vitae lacus lobortis tincidunt. Nunc pellentesque vel dui sit amet ornare. Praesent dolor purus, euismod eu tempor vel, placerat nec ipsum. Suspendisse ac volutpat erat. Quisque sed semper odio. Etiam eget orci ultricies, dignissim magna sit amet, malesuada purus. Praesent iaculis sollicitudin risus, ut porttitor diam dictum et. Pellentesque a dolor eu metus mattis gravida. Nunc vitae pellentesque erat. Donec sit amet mauris ullamcorper dui viverra auctor id sed massa. Aliquam elementum imperdiet posuere. Nunc eu scelerisque tortor. Vestibulum faucibus orci et arcu tincidunt fermentum. Donec lacus nisl, ornare ut placerat pellentesque, lobortis quis ex. Morbi ultricies efficitur justo eget lobortis.

Donec dictum ex eget quam feugiat tristique. Donec eget lobortis lacus. Quisque commodo ex et nibh vulputate, sit amet faucibus sapien condimentum. Ut nisl justo, eleifend et quam in, tincidunt pellentesque purus. Pellentesque laoreet tincidunt tincidunt. Nam vehicula, nulla at feugiat posuere, ante libero lacinia ligula, vitae ultrices diam ante ut sapien. Proin a sapien nunc. Nam malesuada leo sed lacus pretium, et dictum dui facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'user_id' => 1,
            'validated' => 1
        ]);

        $article->categories()->attach(2);

        Article::create([
            'title' => 'Article 3',
            'content' => 'Le fils madeleineLe fils madeleineLe fils madeleineLe fils madeleineLe madeleineLemadeleineLemadeleineLemadeleineLe',
            'user_id' => 1,
            'validated' => 1
        ]);

        Article::create([
            'title' => 'Salut seb',
            'content' => 'Je suis secretement amoureux de toi ..',
            'user_id' => 1,
            'validated' => 1
        ]);

        Article::create([
            'title' => 'Salut seb',
            'content' => 'Je suis secretement amoureux de toi ..',
            'user_id' => 1,
            'validated' => 1
        ]);
    }
}
