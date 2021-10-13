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

            [
            'name' => 'Ficus Abidjan.',
            'bio' => "&bull; Doesn't need much water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/abi-17-boule.psdWit.png?v=1584527926',
            'price' => '21,95',
            ],

            [
            'name' => 'Calathea Ornata.',
            'bio' => "&bull; Doesn't need much water. <br />
                          &bull; Doesn't need alot of light. <br />
                          &bull; Strongly purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/Calathea_Ornata_P14_slim_sierpot.png?v=1627027084',
            'price' => '24,95',
            ],
            
            [
            'name' => 'Monstera Adansonii.',
            'bio' => "&bull; Needs a decent amount of water. <br />
                        &bull; Doesn't need alot of light. <br />
                        &bull; Strongly purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/Monstera_Adansonii_p12_sierpot.png?v=1602839793',
            'price' => '22,95',
            ],

            [
            'name' => 'Yucca.',
            'bio' => "&bull; Needs a decent amount of water. <br />
                        &bull; Doesn't need alot of light. <br />
                        &bull; Strongly purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/yucca-21-plantstandaard.psdLaag-2.png?v=1620303257',
            'price' => '39,95',
            ],

            [
            'name' => 'Ananas Mi Amigo.',
            'bio' => "&bull; Doesn't need much water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Strongly purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/ananas-12-guido-wit.png?v=1596102545',
            'price' => '24,95',
            ],

            [
            'name' => 'Musa Dwarf Cavendish.',
            'bio' => "&bull; Needs a lot of water. <br />
                      &bull; Needs a lot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/musa-21-stan.psdLaag-4.png?v=1625127378',
            'price' => '34,95',
            ],

            [
            'name' => 'Maranta Leuconeura Kerchoveana.',
            'bio' => "&bull; Doesn't need much water. <br />
                      &bull; Doesn't need alot of light. <br />
                      &bull; Purifies the air.",
            'image' => 'https://cdn.shopify.com/s/files/1/0761/9483/products/Maranta_Kerchoveana_p12_sierpot.png?v=1593617066',
            'price' => '19,95',
            ],
            
        ]);
    }
}
