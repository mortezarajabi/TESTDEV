<?php

use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Content::truncate();
        
        App\Content::insert([
            ['title' => 'Approach', 'body' => "We exist to influence and to help build the safe, sustainable, inspiring future we deserve. We collaborate to deliver projects and advice that is more environmentally sustainable, more socially responsible and more commercially intuitive for a better built environment."],
            ['title' => 'Projects', 'body' => 'Our Projects team work across residential and commercial property development to create outcomes defined by substance, genuine interaction and meaning. We believe in the value of great design and utilise design thinking as a tool to create better, more sustainable spaces, systems, services and experiences for people.'],
            ['title' => 'Sustainability', 'body' => 'Our Sustainability team provides advice that is commercially grounded, yet ambitious. We pursue exceptional outcomes that are socially, environmentally and economically sustainable and enable action across government, institutions and organisations.'],
            ['title' => 'Collective', 'body' => 'A Collective enabled by HIP V. HYPE is a workshare space for sustainably-minded businesses seeking to create better products, services, systems and buildings for the future we deserve'],            
        ]);
    }
}
