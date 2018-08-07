<?php

use Illuminate\Database\Seeder;
use App\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $experience1 = new Experience();
        $experience1->title = 'University of Southern Denmark';
        $experience1->from = 2017;
        $experience1->to = 'present';
        $experience1->position = 'Student Ambassador';
        $experience1->location = 'Odense, DK';
        $experience1->text = 'I am currently working as a Student Ambassador for Software Engineering at SDU. This job revolves around setting up meetings with (mostly) high school students who wants to experience how it is to study Software Engineering at the university.';
        $experience1->save();

        $experience2 = new Experience();
        $experience2->title = 'Freelance';
        $experience2->from = 2015;
        $experience2->to = 'present';
        $experience2->position = 'Full-Stack dev & Graphic Designer';
        $experience2->location = 'Odense, DK';
        $experience2->text = 'I started doing freelance work when I started at SDU. It has mainly been design and development of websites at affordable prices, so that I could gain experience. While not having any jobs, I would be working on my own projects.';
        $experience2->save();

        $experience3 = new Experience();
        $experience3->title = 'SIF (SDU)';
        $experience3->from = 2016;
        $experience3->to = '2018';
        $experience3->position = 'Volunteer';
        $experience3->location = 'Odense, DK';
        $experience3->text = "Soon after I started studying at SDU I joined the volunteer organisation 'Syddanske Ingeni&oslash;rstuderendes F&aelig;llesr&aring;d' in which I was a part of the subsidiary 'SIF Event'. My responsibility was to plan and advertise events for the students, and at times attend management meetings.";
        $experience3->save();

        $experience4 = new Experience();
        $experience4->title = 'Boldshop.dk';
        $experience4->from = 2012;
        $experience4->to = '2016';
        $experience4->position = 'Owner';
        $experience4->location = 'Copenhagen, DK';
        $experience4->text = 'When i turned 18 I started my own company, it was a niche webshop selling balls for sports. During the life of the webshop I learned alot about SEO, Google Analytics and Google AdSense. While running the webshop I also faced the struggle of finding suppliers, which eventually became its downfall, because I did not possess the funds to attract proper brands and broaden the variety of products.';
        $experience4->save();
    }
}
