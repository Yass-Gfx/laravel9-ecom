<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
          ['id' => 1,'name'=> 'Super Admin','type' => 'superadmin', 'vendor_id' => 0, 'mobile' => '201114771781', 'email'=> 'yass_adv@yahoo.com', 'image' => '', 'status' => 1,'password' => bcrypt('yassgfx')],
        ];
        Admin::insert($adminRecords);
    }
}
