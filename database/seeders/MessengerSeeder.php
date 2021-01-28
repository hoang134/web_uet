<?php

namespace Database\Seeders;

use App\Models\Messenger;
use Illuminate\Database\Seeder;

class MessengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messenger = new Messenger();
        $messenger->id =1;
        $messenger->user_from = 'hoang';
        $messenger->user_to = 'admin';
        $messenger->content = "mấy giờ thi";
        $messenger->belong = Messenger::BELONG_USER;
        $messenger->save();

        $messenger = new Messenger();
        $messenger->id =2;
        $messenger->user_from = 'manhhoang1';
        $messenger->user_to = 'admin';
        $messenger->content = "lịch thi";
        $messenger->belong = Messenger::BELONG_USER;
        $messenger->save();

        $messenger = new Messenger();
        $messenger->id =3;
        $messenger->user_from = 'admin';
        $messenger->user_to = 'hoang';
        $messenger->content = "20h30";
        $messenger->belong = Messenger::BELONG_ADMIN;

        $messenger->save();

        $messenger = new Messenger();
        $messenger->id =4;
        $messenger->user_from = 'hoang';
        $messenger->user_to = 'admin';
        $messenger->content = "ok";
        $messenger->belong = Messenger::BELONG_USER;

        $messenger->save();

        $messenger = new Messenger();
        $messenger->id =5;
        $messenger->user_from = 'admin';
        $messenger->user_to = 'manhhoang1';
        $messenger->content = "29/2";
        $messenger->belong = Messenger::BELONG_ADMIN;
        $messenger->save();
    }
}
