<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
   
        \App\Models\User::factory()->create([
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'test@example.com',
        ]);

       
        $tags = \App\Models\Tag::factory(10)->create();

       
        \App\Models\Job::factory(20)->create()->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
