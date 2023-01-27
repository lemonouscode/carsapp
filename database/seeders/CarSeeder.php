<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('cars')->insert([
            [
                "name"=>"Tesla",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"20000",
                "image_url"=>"https://images.pexels.com/photos/11531019/pexels-photo-11531019.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>true
            ],

            [
                "name"=>"Bmw",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"35000",
                "image_url"=>"https://images.pexels.com/photos/951318/pexels-photo-951318.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>true
            ],

            [
                "name"=>"Mercedes",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"40000",
                "image_url"=>"https://images.pexels.com/photos/193991/pexels-photo-193991.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>true
            ],

            [
                "name"=>"Audi",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"31000",
                "image_url"=>"https://images.pexels.com/photos/909907/pexels-photo-909907.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>true
            ],

            [
                "name"=>"Lamborghini",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"60000",
                "image_url"=>"https://images.pexels.com/photos/3972755/pexels-photo-3972755.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>true
            ],

            [
                "name"=>"Nissan ",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"5000",
                "image_url"=>"https://images.pexels.com/photos/69020/pexels-photo-69020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>false
            ],

            [
                "name"=>"Unknown",
                "description"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti dolorem, hic nihil fugiat modi fuga reiciendis recusandae provident deserunt eius.",
                "price"=>"7000",
                "image_url"=>"https://images.pexels.com/photos/1257773/pexels-photo-1257773.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                "published"=>false
            ],
        ]);
    }
}
