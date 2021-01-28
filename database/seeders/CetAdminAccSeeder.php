<?php

namespace Database\Seeders;

use App\Models\CetAdminAcc;
use Illuminate\Database\Seeder;

class CetAdminAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new CetAdminAcc();
        $admin->id =1;
        $admin->tendangnhap = 'admin';
        $admin->Hoten = 'admin';
        $admin->Email = 'admin@gmail.com';
        $admin->password = bcrypt(123456);
        $admin->save();
    }
}
