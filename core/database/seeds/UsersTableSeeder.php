<?php
namespace Database\Seeder;

use App\User;
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
        if(!User::count(var)){
            DB::table('User')->insert([
                'name'=>'Super Admin',
                'email'=>'tipson664@gmail.com',
                'password'=>Hash::make('Password@1')
            ]);
        }
    }
}
