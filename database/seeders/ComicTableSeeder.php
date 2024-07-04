<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comics = config('comics');

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = (float) str_replace('$', '', $comic['price']);
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->save();
        }
        // $newComic = new Comic();
        // $newComic->title = 'Tangen Toppa Gurren Lagann #1';
        // $newComic->description = 'Gurren Lagann takes place in a future where the Spiral King, Lordgenome, rules Earth and forces mankind to live in isolated subterranean villages which have no contact with the surface world or other villages and are under constant threat from earthquakes. Selected villagers called diggers are conscripted to expand their homes deeper underground. Simon, a meek young digger living in Giha village who is ostracized by his peers, finds solace in his best friend Kamina, an eccentric delinquent who is like an older brother figure to him. Kamina encourages Simon to join his gang, Team Gurren, to help him achieve his dream of visiting the surface world.';
        // $newComic->thumb = 'https://upload.wikimedia.org/wikipedia/en/2/20/Gurren_Lagann_key_visual.jpg';
        // $newComic->price = 12.99;
        // $newComic->series = "Action Comics";
        // $newComic->type = 'comic book';
        // $newComic->sale_date = '2007-06-20';
        // $newComic->save();
    }
}
