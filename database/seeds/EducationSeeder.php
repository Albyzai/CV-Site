<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $education1 = new Education();
        $education1->title = 'University of Southern Denmark';
        $education1->from = 2015;
        $education1->to = 'present';
        $education1->genre = 'BA in Software Engineering';
        $education1->location = 'Odense, DK';
        $education1->text = 'I graduated my bachelor this summer with the thesis "Automated Bot using Predictive Trading Algorithm as a Decentralized Application", which in short means: we worked with blockchain & machine learning. <br><br>

            To name a few of the things I learned during my studies, I learned about the software lifecycle, UML diagrams, component based development and web development. But the most important thing i learned, was to find my own information through Google.';
        $education1->save();

        $education2 = new Education();
        $education2->title = 'Software Development Camp';
        $education2->from = 2013;
        $education2->genre = 'Summer course';
        $education2->location = 'Aalborg, DK';
        $education2->text = "Software Development Camp is a summer camp arranged by 'Ungdommens Naturvidenskabelige Forening' (UNF). On the camp we developed Android applications using Eclipse with the Android SDK. This was the first time i learned to create a SQLite database.";
        $education2->save();

        $education3 = new Education();
        $education3->title = 'Game Development Camp';
        $education3->from = 2013;
        $education3->genre = 'Summer course';
        $education3->location = 'Viborg, DK';
        $education3->text = "Game Development Camp is another summer camp arranged by UNF. On this camp i was introduced to C# for the first time. The organisers put us in groups consisting of developers, graphic designers and a sound man, I was one of the developers of my group. During the camp we learned how to combine all our individual skills into a game. The game created by my group can be found <a style='color: #fb5255;' href='https://game.unf.dk/games/game.php?gid=76'>here</a>.";
        $education3->save();
    }
}
