<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CetStudentAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = '1';
        $user->tendangnhap = 'hoang';
        $user->Hoten = 'hoang';
        $user->Email = 'hoang';
        $user->Trangthai = '1';
        $user->password = bcrypt('123456');
        $user->verify = 'adsfgdhfjgh';
        $user->save();

    	$user = new User();
        $user->id = '2';
        $user->tendangnhap = 'manhhoang1';
        $user->Hoten = 'hg';
        $user->Email = 'vumah';
        $user->Trangthai = '1';
        $user->password = bcrypt('123456');
        $user->verify = 'adsfgdhfjgh';
        $user->save();
    }
}
