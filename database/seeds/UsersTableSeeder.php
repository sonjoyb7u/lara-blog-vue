<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->defaultUserData();

        $faker = Faker\Factory::create();

        foreach(range(1, 2) as $index) {
            $name = $faker->name;
            $password = '123456';

            User::create([
                'name' => $name,
                'email' => $faker->freeEmail,
                'username' => $this->userGenerate($name),
                'image' => 'default.png',
                'password' => Hash::make($password),
                'status' => 'inactive',

            ]);
        }


    }

    public function defaultUserData() {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'image' => 'default.png',
            'password' => Hash::make('123456'),
            'status' => 'active',
        ]);
    }

    public function userGenerate($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '_', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '_');
        // remove duplicate -
        $text = preg_replace('~-+~', '_', $text);
        // lowercase
        $text = strtolower($text);
        if(empty($text)) {
            return 'N-A';
        }

        return $text;
    }

}
