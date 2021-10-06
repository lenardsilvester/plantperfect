<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([

            [
            'name' => 'Sansevieria Zeylanica.',
            'bio' => "&bull; Doesn't need much water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/sansevieria-groen-21-era-relief-antraciet.png?v=1620301793',
            'price' => '24,95',
            ],

            [
            'name' => 'Ficus Abidjan.',
            'bio' => "&bull; Doesn't need much water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/abi-17-boule.psdWit.png?v=1584527926',
            'price' => '21,95',
            ],

            [
            'name' => 'Monstera Pertusum.',
            'bio' => "&bull; Needs a decent amount of water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/Monstera-Pertusum-24-boule-antraciet.png?v=1601560614',
            'price' => '29,95',
            ],

            [
            'name' => 'Kentiapalm.',
            'bio' => "&bull; Needs a decent amount of water. <br />
                      &bull; Needs a decent amount of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/kentia-24-gabriel-grijs.png?v=1625646425',
            'price' => '24,95',
            ],
            
            [
            'name' => 'Rhipsalis Cashero.',
            'bio' => "&bull; Doesn't need alot of water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Lightly purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/rhipsalis-12-guido-wit.png?v=1596100713',
            'price' => '21,95',
            ],

            [
            'name' => 'Dracaena Warneckei.',
            'bio' => "&bull; Doesn't need alot of water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/drac-warneckei-17-terracotta.psdLaag-7.png?v=1584527980',
            'price' => '24,95',
            ],
            
        ]);
    }
}
