<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Notifications\WelcomeMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateLoginProfile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Resume::get() as $key => $resume) {
            $findPass = Str::of($resume->email)->explode('@');

            if(!User::where('email', $resume->email)->exists()){
                $user = User::create([
                    'name'  =>  $resume->fullname,
                    'email' =>  $resume->email,
                    'password'  =>  Hash::make($findPass[0])
                ]);
    
                if($user){
                    $user->assignRole('User');
                    
                    $user->notify(new WelcomeMail());
                }
            }
        }
    }
}
