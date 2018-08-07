<?php

use Illuminate\Database\Seeder;
use App\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $interest1 = new Interest();
        $interest1->title = 'Blockchain';
        $interest1->icon = 'fas fa-link';
        $interest1->save();

        $interest2 = new Interest();
        $interest2->title = 'Volleyball';
        $interest2->icon = 'fas fa-volleyball-ball';
        $interest2->save();

        $interest3 = new Interest();
        $interest3->title = 'Science';
        $interest3->icon = 'fas fa-flask';
        $interest3->save();

        $interest4 = new Interest();
        $interest4->title = 'UX';
        $interest4->icon = 'fas fa-pencil-alt';
        $interest4->save();

        $interest5 = new Interest();
        $interest5->title = 'Cryptocurrencies';
        $interest5->icon = 'fab fa-bitcoin';
        $interest5->save();

        $interest6 = new Interest();
        $interest6->title = 'Optimization';
        $interest6->icon = 'fas fa-chart-line';
        $interest6->save();

        $interest7 = new Interest();
        $interest7->title = 'Space';
        $interest7->icon = 'fas fa-space-shuttle';
        $interest7->save();

        $interest8 = new Interest();
        $interest8->title = 'Coding';
        $interest8->icon = 'fas fa-code';
        $interest8->save();

        $interest9 = new Interest();
        $interest9->title = 'Movies';
        $interest9->icon = 'fas fa-film';
        $interest9->save();

        $interest10 = new Interest();
        $interest10->title = 'Gaming';
        $interest10->icon = 'fas fa-gamepad';
        $interest10->save();

        $interest11 = new Interest();
        $interest11->title = 'Entrepreneurship';
        $interest11->icon = 'fas fa-building';
        $interest11->save();

        $interest12 = new Interest();
        $interest12->title = 'Machine Learning';
        $interest12->icon = 'fas fa-robot';
        $interest12->save();
    }
}
