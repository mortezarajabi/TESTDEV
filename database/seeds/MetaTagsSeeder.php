<?php

use Illuminate\Database\Seeder;

class MetaTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\MetaTag::truncate();
        
        App\MetaTag::insert([
            ['name' => 'author', 'content' => "TestDev"],
            ['name' => 'description', 'content' => 'It is a test project'],
            ['name' => 'keywords', 'content' => 'project, test, dev, full-stack'],            
        ]);
    }
}
