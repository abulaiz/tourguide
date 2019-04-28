<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Guide;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$guides = [
    		[
	    		'name' => 'Herman', 'email' => 'herman@gmail.com',
	    		'password' => bcrypt('herman123'), 'gender' => 'Male',
	    		'birth_place' => 'Bandung', 'birth_date' => '1998-12-12',
	    		'educational_background' => 'Post Graduate',
	    		'description' => 'I Have a pan, and i have a paint ...'
    		],
    		[
	    		'name' => 'Siska', 'email' => 'siska@gmail.com',
	    		'password' => bcrypt('siska123'), 'gender' => 'Male',
	    		'birth_place' => 'Medan', 'birth_date' => '1998-12-13',
	    		'educational_background' => 'Diploma',
	    		'description' => 'I Have a pan, and i have a paint ...'
    		],
    		[
	    		'name' => 'Setya', 'email' => 'setya@gmail.com',
	    		'password' => bcrypt('setya123'), 'gender' => 'Male',
	    		'birth_place' => 'Semarang', 'birth_date' => '1998-11-12',
	    		'educational_background' => 'Post Graduate',
	    		'description' => 'I Have a pan, and i have a paint ...'
    		]    		    		
    	];

    	foreach ($guides as $items) {
    		$item = (object)$items;
 			if(!User::where('email', $item->email)->exists()){
	    		$user = null;
	            $user = new User();
	            $user->name = $item->name;
	            $user->email = $item->email;
	            $user->password = bcrypt( $item->password );
	            $user->save();
	            $user->assignRole('tourguide');

	            Guide::create([
	            	'user_id' => $user->id,
	            	'gender' => $item->gender,
	            	'date_birth' => $item->birth_date,
	            	'place_birth' => $item->birth_place,
	            	'educational_background' => $item->educational_background,
	            	'description' => $item->description
	            ]);  				
 			}              		
    	}
    }
}
