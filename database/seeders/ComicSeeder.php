<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic');
        Comic::truncate();
        foreach ($comics as $comicElement) {
           
            $comic = new Comic();
            $comic->title = $comicElement['title'];
            $comic->description = $comicElement['description'];
            $comic->thumb = $comicElement['thumb'];
            $comic->price = $comicElement['price'];
            $comic->series = $comicElement['series'];
            $comic->sale_date = $comicElement['sale_date'];
            $comic->type = $comicElement['type'];
            $comic->artists = implode( ',',$comicElement['artists']); // usare la pipe come separatpre (|)
            $comic->writers = implode(',',$comicElement['writers']); // usare la pipe come separatpre (|)
            $comic->save();
        }
}
}
