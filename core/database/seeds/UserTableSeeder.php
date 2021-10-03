<?php
use Illuminate\Database\Seeder;
 /**
 * 
 */
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		// code...
		 App\User::create(array(
            'name'=>'Super Admin',
            'email'=>'tipson664@gmail.com',
            'password'=>Hash::make('Password@1')
        ));
	}
}
?>