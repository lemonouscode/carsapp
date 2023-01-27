<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $table->string('name');
        //     $table->string('color');
        //     $table->string('size');
        //     $table->string('carname');
        //     $table->string('image');
        //     $table->string('description');

        DB::table('parts')->insert([

            [
                "name"=>"Wheel",
                "color"=> "Black",
                "size"=>"Standard",
                "carname"=>"Tesla",
                "image"=>"https://images.pexels.com/photos/241197/pexels-photo-241197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "description"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta doloribus dignissimos pariatur dolor praesentium.",
            ],


            [
                "name"=>"Wheel",
                "color"=> "Black",
                "size"=>"Standard",
                "carname"=>"Mercedes",
                "image"=>"https://images.pexels.com/photos/195635/pexels-photo-195635.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "description"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta doloribus dignissimos pariatur dolor praesentium.",
            ],


            [
                "name"=>"Wheel",
                "color"=> "Black",
                "size"=>"Standard",
                "carname"=>"Audi",
                "image"=>"https://images.pexels.com/photos/812901/pexels-photo-812901.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "description"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta doloribus dignissimos pariatur dolor praesentium.",
            ],

            [
                "name"=>"Wheel",
                "color"=> "Black",
                "size"=>"Standard",
                "carname"=>"Lamborghini",
                "image"=>"https://images.pexels.com/photos/8985925/pexels-photo-8985925.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "description"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta doloribus dignissimos pariatur dolor praesentium.",
            ],

            [
                "name"=>"Wheel",
                "color"=> "Black",
                "size"=>"Standard",
                "carname"=>"Bmw",
                "image"=>"https://images.pexels.com/photos/4870703/pexels-photo-4870703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "description"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta doloribus dignissimos pariatur dolor praesentium.",
            ],

        ]);


    }
}
