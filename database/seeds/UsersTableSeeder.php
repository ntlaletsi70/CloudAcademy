<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       // factory(App\User::class, 50)->create()->each(function ($user) {
         //   $user->posts()->save(factory(App\Post::class)->make());
            
         $faker = \Faker\Factory::create();

         $password = Hash::make('hello12');

       
         App\User::create([

            'name' => 'Tony',
            'email' => 'tonysgoloza@gmail.com',
            'password'=> $password,
        ]);

        
        App\User::create([

            'name' => 'Greg',
            'email' => 'greg@gmail.com',
            'password'=> $password,
        ]);

        
        App\User::create([

            'name' => 'Kevin',
            'email' => 'kevin@gmail.com',
            'password'=> $password,
        ]);

        
        App\User::create([

            'name' => 'Mark',
            'email' => 'mark@gmail.com',
            'password'=> $password,
        ]);

        
        App\User::create([

            'name' => 'Luke',
            'email' => 'luke@gmail.com',
            'password'=> $password,
        ]);

        
        App\User::create([

            'name' => 'Thabo',
            'email' => 'thabo@gmail.com',
            'password'=> $password,
        ]);

    
    }
}
