<?php

use App\Profil;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('profil_user')->truncate();

        $admin =   User::create([
               'name'=>'admin',
               'email'=>'Yakhine',
               'password'=> Hash::make('passer@Yakhine'),
           ]);
        
      $adminProfil = User::where('status', 'admin')->first();    

      $admin->profils()->attach( $adminProfil);
   
  
    }
}