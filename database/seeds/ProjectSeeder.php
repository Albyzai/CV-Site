<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $project1 = new Project();
        $project1->title = 'Buus El-Teknik';
        $project1->caption = "Setup of the 'Electrician' Wordpress theme and design of logo and business card.";
        $project1->image = 'buus-elteknik.jpg';
        $project1->link = 'http://buusel-teknik.dk';
        $project1->category = 'web';
        $project1->save();

        $project2 = new Project();
        $project2->title = 'Ap-pe';
        $project2->caption = "Complete design & development of a Wordpress theme to incorporate multiple businesses into one.";
        $project2->image = 'ap-pe.jpg';
        $project2->link = 'http://ap-pe-dk';
        $project2->category = 'design';
        $project2->save();

        $project3 = new Project();
        $project3->title = 'Supern0va Esports';
        $project3->caption = "Setup & customization of the 'Zerif Lite' Wordpress theme for Supern0va.";
        $project3->image = 'supernova.jpg';
        $project3->link = 'http://supern0va.dk';
        $project3->category = 'web';
        $project3->save();

        $project4 = new Project();
        $project4->title = 'Jeg Har Aldrig';
        $project4->caption = "Design & development of an Android app to resemble the drinking game 'Never have i ever'";
        $project4->image = 'jegharaldrig.jpg';
        $project4->link = 'https://play.google.com/store/apps/details?id=mohrdevelopment.neverhaveiever';
        $project4->category = 'android';
        $project4->save();
    }
}
