<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->delete();
        DB::table('users')->delete();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('pwd-admin')
        ]);
        User::factory()->create([
            'name' => 'winery',
            'email' => 'winery@example.com',
            'password' => bcrypt('pwd-winery'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'seller',
            'email' => 'sellet@example.com',
            'password' => bcrypt('pwd-seller'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'winery-seller',
            'email' => 'winery-seller@example.com',
            'password' => bcrypt('pwd-winery-seller'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'name',
            'surname' => 'surname',
            'email' => 'user@example.com',
            'password' => bcrypt('pwd-user')
        ]);

        $admin = User::where('name', 'admin')->first();
        $winery = User::where('name', 'winery')->first();
        $seller = User::where('name', 'seller')->first();
        $winery_seller = User::where('name', 'winery-seller')->first();
        $user = User::where('name', 'name')->first();

        DB::table('roles')->insert([
            'user_id' => $admin->id,
            'role' => 'admin'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery->id,
            'role' => 'winery'
        ]);
        DB::table('roles')->insert([
            'user_id' => $seller->id,
            'role' => 'seller'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery_seller->id,
            'role' => 'winery'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery_seller->id,
            'role' => 'seller'
        ]);
        DB::table('roles')->insert([
            'user_id' => $user->id,
            'role' => 'user'
        ]);
    }
}
