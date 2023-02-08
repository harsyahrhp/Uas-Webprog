<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('Products')->insert([
                [
                'name' => "Brokoli",
                'description' => "brokoli adalah sayur berwarna hijau",
                'image' => 'https://i.pinimg.com/736x/bd/a1/25/bda125b1a553eb788fa944b82ab3cb0b.jpg',
                'price' => 150000,
                ],
                [
                    'name' => "koll",
                    'description' => "sayur koll adalah sayur yang sehat",
                    'image' => 'https://img.pikbest.com/png-images/qianku/cartoon-hand-drawn-green-vegetables-two_2057370.png!bw700',
                    'price' => 100000,
                    ],
                    [
                        'name' => "sawi",
                        'description' => "sayur sawi adalah sayur yang murah dan nikmat",
                        'image' => 'https://i.pinimg.com/736x/59/8e/1c/598e1cae7d522ff735b5de06052398e8.jpg',
                        'price' => 9000,
                        ],
                        [
                            'name' => "wortel",
                            'description' => "sayur wortel adalah sayur yang dapat menyahatkan mata",
                            'image' => 'https://i.pinimg.com/originals/28/86/b8/2886b8b45599cd90c4172b02a5c64b60.jpg',
                            'price' => 19000,
                            ],
                            [
                                'name' => "jagung",
                                'description' => "jagung adalah sayur yang sehat enak dan manis",
                                'image' => 'https://i.pinimg.com/474x/f3/55/db/f355dbd29fa733240ad0e9c0a0551871.jpg',
                                'price' => 11000,
                                ],
                                [
                                    'name' => "tomat",
                                    'description' => "tomat adalah sayur yang berwarna merah",
                                    'image' => 'https://i.pinimg.com/474x/f3/55/db/f355dbd29fa733240ad0e9c0a0551871.jpg',
                                    'price' => 25000,
                                    ],
                                    [
                                        'name' => "timun",
                                        'description' => "timun adalah sayur yang biasa di pakai untuk lalapan",
                                        'image' => 'https://img.lovepik.com/free-png/20220110/lovepik-cartoon-green-vegetable-illustration-png-image_401402200_wh860.png',
                                        'price' => 15000,
                                        ],
                                        [
                                            'name' => "paprika",
                                            'description' => "paprika adalah sayur yang pedas",
                                            'image' => 'https://img.lovepik.com/free-png/20220108/lovepik-colorful-cartoon-vegetable-bell-pepper-yellow-red-png-image_401303567_wh860.png',
                                            'price' => 15000,
                                            ],
                                            [
                                                'name' => "kangkung",
                                                'description' => "kangkung adalah sayur yang sering di olah dengan tumis",
                                                'image' => 'https://belanjasayur.id/data/images/product/IMG15760.jpg',
                                                'price' => 15000,
                                                ],
                                                [
                                                    'name' => "terong",
                                                    'description' => "kangkung adalah sayur yang berwarna ungu",
                                                    'image' => 'https://static5.depositphotos.com/1000792/488/v/600/depositphotos_4887807-stock-illustration-eggplant-presenting-something.jpg',
                                                    'price' => 15000,
                                                    ],
                                                    [
                                                        'name' => "cabe",
                                                        'description' => "cabe adalah sayur yang memiliki rasa pedas",
                                                        'image' => 'https://i.pinimg.com/originals/e8/1f/01/e81f01dda2a8c493041f88db25098c4d.png',
                                                        'price' => 15000,
                                                        ],
                                                        [
                                                            'name' => "bayam",
                                                            'description' => "bayam adalah sayur yang memiliki rasa enak",
                                                            'image' => 'https://png.pngtree.com/png-clipart/20210311/original/pngtree-cartoon-bundled-spinach-clipart-png-image_5978461.jpg',
                                                            'price' => 15000,
                                                            ],

            ]);

    }
}
