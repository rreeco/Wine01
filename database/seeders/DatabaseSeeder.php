<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\caso_key;
use App\Models\Seller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('caso_keys')->delete();
        DB::table('roles')->delete();
        DB::table('users')->delete();
        DB::table('sellers')->delete();

        User::factory()->create([
            //'id' => '0001',
            'name' => 'admin',
            'nickname' => 'caso',
            'country' => 'Italia',
            'email' => 'admin@nonacaso.com',
            'password' => bcrypt('pwd-admin')
        ]);
        Seller::factory()->create([
           // 'signed' => '5003',
            'name' => 'KRUG',
            'email' => 'winery@krug.com',
            'password' => bcrypt('pwd-krug'),
            'vat' => 'vatvatvat',
            'address' => 'address',
            'country' => 'Francia',
            'city' => 'Champagne',
            'postal_code'=> '10423'
        ]);
        Seller::factory()->create([
            //'id' => '5001',
            'name' => 'Roy_seller',
            'email' => 'seller@example.com',
            'password' => bcrypt('pwd-roy'),
            'vat' => 'catcatcat',
            'address' => 'address',
            'city' => 'Ferrara',
            'country' => 'Italia',
            'postal_code'=> '44123'
        ]);
        Seller::factory()->create([
            'name' => 'winery-seller',
            'email' => 'winery-seller@example.com',
            'password' => bcrypt('pwd-winery-seller'),
            'vat' => 'vatvat001',
            'address' => 'address',
            'city' => 'Bergamo',
            'country' => 'Italia',
            'postal_code'=> '46030'
        ]);
        User::factory()->create([
            //'id' => '0002',
            'name' => 'expert',
            'nickname' => 'paoloV',
            'country' => 'Ungheria',
            'surname' => 'paolini',
            'email' => 'paolo@example.com',
            'password' => bcrypt('pwd-user')
        ]);

        $admin = User::where('name', 'admin')->first();
        $winery = Seller::where('name', 'KRUG')->first();
        $seller = Seller::where('name', 'Roy_seller')->first();
        $winery_seller = Seller::where('name', 'winery-seller')->first();
        $guide = User::where('name', 'expert')->first();

        DB::table('roles')->insert([
            'id' => $admin->id,
            'role' => 'admin'
        ]);
        DB::table('caso_keys')->insert([
            'signed' => $winery->id,
            'role' => 'wine_cellar'
        ]);
        DB::table('caso_keys')->insert([
            'signed' => $seller->id,
            'role' => 'restaurant'
        ]);
        DB::table('caso_keys')->insert([
            'signed' => $winery_seller->id,
            'role' => 'seller'
        ]);
        /*DB::table('roles')->insert([
            'id' => $winery_seller->id,
            'role' => 'guide'
        ]);*/
        DB::table('roles')->insert([
            'id' => $guide->id,
            'role' => 'expert'
        ]);

        //DB::table('posts')->run();
        
        
    }
}
