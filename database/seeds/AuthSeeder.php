<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
use App\Tourist;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	'admin',
        	'tourguide',
        	'tourist',
        	// 'fotographer' => null
        ];

        // Seed Role Data
        foreach ($roles as $item) {
        	if( !Role::where('name',$item)->exists() )
        		Role::create(['name' => $item]);        	
        }      

        if (!User::where('email', 'admin@gmail.com')->exists()) {
            $user1 = new User();
            $user1->name = 'admin';
            $user1->email = 'admin@gmail.com';
            $user1->password = bcrypt('admin123');
            $user1->save();
            $user1->assignRole('admin');
        }

        if (!User::where('email', 'johndoe@gmail.com')->exists()) {
            $user3 = new User();
            $user3->name = 'johndoe';
            $user3->email = 'johndoe@gmail.com';
            $user3->password = bcrypt('johndoe123');
            $user3->save();
            $user3->assignRole('tourist');

            Tourist::create([
                'user_id' => $user3->id ,'country' => 'Germany', 'phone' => '+494245232'
            ]);
        }

    }
}
