<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maintext;


class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $obj = new Maintext;
        $obj->url = "about";
        $obj->body = "Article for About";
        $obj->name = "About";
        $obj->save();
    }
}
