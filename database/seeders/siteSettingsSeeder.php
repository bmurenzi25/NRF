<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'welcome paragraph',
            'value' => 'Lorem ipsum dolor sit amet, elit, sed do eiusmod ut labore et dolore magna aliqua.'
        ]);
        DB::table('settings')->insert([
            'name' => 'about us paragraph',
            'value' => 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad. Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad. Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad. Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non quae, fugiat consequatur voluptatem ad.'
        ]);
        DB::table('settings')->insert([
            'name' => 'objective paragraph',
            'value' => 'Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet Morbi ac metus vitae diam scelerisque malesuada eget eu mauris.Cras varius lorem ac velit pharetra. 

                        Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consectetur adipisicing elit. Cras varius lorem ac velit pharetra, non scelerisque mi vulputate. Phasellus bibendum.
            
                        Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consectetur adipisicing elit. Cras varius lorem ac velit pharetra, non scelerisque mi vulputate. Phasellus bibendum.'
        ]);
        DB::table('settings')->insert([
            'name' => 'address',
            'value' => 'Lorem ipsum Agency, 343 marketing, #4148 Honey street, NY - 62617.'
        ]);
        DB::table('settings')->insert([
            'name' => 'phone number',
            'value' => '+1(21) 234 557 4567'
        ]);
        DB::table('settings')->insert([
            'name' => 'email',
            'value' => 'support@mail.com'
        ]);
    }
}
