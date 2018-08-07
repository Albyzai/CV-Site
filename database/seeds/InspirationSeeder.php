<?php

use Illuminate\Database\Seeder;
use App\Inspiration;

class InspirationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $inspiration1 = new Inspiration();
        $inspiration1->name = 'Elon Musk';
        $inspiration1->image = 'elon.jpg';
        $inspiration1->speech_bubble = "<h5>Elon Musk</h5><hr> Is a big inspiration of mine because he is genuinely trying to save the world, and dares to challenge the status-quo with his radical ideas. <br> <br> He also tries to learn from his employees' expertise, which I think is a great way to expand your knowledge.";
        $inspiration1->save();

        $inspiration2 = new Inspiration();
        $inspiration2->name = 'Martin Thorborg';
        $inspiration2->image = 'martin-thorborg.jpg';
        $inspiration2->speech_bubble = "<h5>Martin Thorborg</h5><hr> Is the one who with his videoes, woke my inner entrepreneur. He has done a lot to further entrepreneurship in Denmark, especially Amino.dk has been a great place for me to learn. <br> <br> Martin also taught me that you don't have to go to school to learn how to thrive in society. He taught me that practical experience is worth so much more.";
        $inspiration2->save();

        $inspiration3 = new Inspiration();
        $inspiration3->name = 'Bill Gates';
        $inspiration3->image = 'bill.jpg';
        $inspiration3->speech_bubble = "<h5>Bill Gates</h5><hr> Was my first real idol, mainly because he at that time was the richest man alive. Nonetheless, he inspires me by doing good for the world with his enormous wealth, and by being one of the first to have major success in the field of software.";
        $inspiration3->save();

        $inspiration4 = new Inspiration();
        $inspiration4->name = 'Steve Jobs';
        $inspiration4->image = 'steve-jobs.jpg';
        $inspiration4->speech_bubble = "<h5>Steve Jobs</h5><hr> Inspired me with his abillity to keep on going no matter how hard life treated him.<br> <br> He also had a great flair for design and knowing what the consumers needed, which i really admire";
        $inspiration4->save();
    }
}
