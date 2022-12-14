<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone 12',
            'category_id' => 1,
            'description' => 'Iphone 12 adalah seri iphone ke 12 setelah iphone 11. Iphone 12 dirilis pada tanggal 13 oktober 2020. Iphone 12 memiliki layar 6.1 inci, 5.4 inci untuk iphone 12 mini, 6.7 inci untuk iphone 12 pro max, dan 6.1 inci untuk iphone 12 pro. Iphone 12 memiliki 4 varian yaitu iphone 12, iphone 12 mini, iphone 12 pro, dan iphone 12 pro max. Iphone 12 memiliki 2 varian warna yaitu iphone 12 dan iphone 12 pro max yang memiliki warna biru dan iphone 12 mini dan iphone 12 pro yang memiliki warna putih. Iphone 12 memiliki 2 varian memori yaitu 64gb dan 128gb. Iphone 12 memiliki 2 varian kapasitas baterai yaitu 2815 mah dan 2815 mah untuk iphone 12 mini, 3687 mah dan 3687 mah untuk iphone 12 pro, dan 3900 mah dan 3900 mah untuk iphone 12 pro max.',
            'price' => 10000000,
            'photoPath' => 'iphone12.jpg'

        ]);

        Product::create([
            'name' => 'iPhone 12 Mini',
            'category_id' => 1,
            'description' => 'Iphone 12 adalah seri iphone ke 12 setelah iphone 11. Iphone 12 dirilis pada tanggal 13 oktober 2020. Iphone 12 memiliki layar 6.1 inci, 5.4 inci untuk iphone 12 mini, 6.7 inci untuk iphone 12 pro max, dan 6.1 inci untuk iphone 12 pro. Iphone 12 memiliki 4 varian yaitu iphone 12, iphone 12 mini, iphone 12 pro, dan iphone 12 pro max. Iphone 12 memiliki 2 varian warna yaitu iphone 12 dan iphone 12 pro max yang memiliki warna biru dan iphone 12 mini dan iphone 12 pro yang memiliki warna putih. Iphone 12 memiliki 2 varian memori yaitu 64gb dan 128gb. Iphone 12 memiliki 2 varian kapasitas baterai yaitu 2815 mah dan 2815 mah untuk iphone 12 mini, 3687 mah dan 3687 mah untuk iphone 12 pro, dan 3900 mah dan 3900 mah untuk iphone 12 pro max.',
            'price' => 799000000,
            'photoPath' => 'iphone12mini.jpg'

        ]);

        Product::create([
            'name' => 'iPhone 12 Pro',
            'category_id' => 1,
            'description' => 'Iphone 12 adalah seri iphone ke 12 setelah iphone 11. Iphone 12 dirilis pada tanggal 13 oktober 2020. Iphone 12 memiliki layar 6.1 inci, 5.4 inci untuk iphone 12 mini, 6.7 inci untuk iphone 12 pro max, dan 6.1 inci untuk iphone 12 pro. Iphone 12 memiliki 4 varian yaitu iphone 12, iphone 12 mini, iphone 12 pro, dan iphone 12 pro max. Iphone 12 memiliki 2 varian warna yaitu iphone 12 dan iphone 12 pro max yang memiliki warna biru dan iphone 12 mini dan iphone 12 pro yang memiliki warna putih. Iphone 12 memiliki 2 varian memori yaitu 64gb dan 128gb. Iphone 12 memiliki 2 varian kapasitas baterai yaitu 2815 mah dan 2815 mah untuk iphone 12 mini, 3687 mah dan 3687 mah untuk iphone 12 pro, dan 3900 mah dan 3900 mah untuk iphone 12 pro max.',
            'price' => 20000000,
            'photoPath' => 'iphone12pro.jpg'

        ]);

        Product::create([
            'name' => 'television',
            'category_id' => 1,
            'description' => 'television adalah perabotan rumah tangga yang berfungsi untuk menonton televisi. television memiliki berbagai macam ukuran layar mulai dari 14 inci hingga 100 inci.',
            'price' => 16000000,
            'photoPath' => 'television.jpg'

        ]);

        Product::create([
            'name' => 'blender',
            'category_id' => 1,
            'description' => 'blender adalah perabotan rumah tangga yang berfungsi untuk memblender makanan. blender memiliki berbagai macam ukuran mulai dari 500 ml hingga 2 liter.',
            'price' => 899000,
            'photoPath' => 'blender.jpg',
        ]);

        Product::create([
            'name' => 'laptop',
            'category_id' => 1,
            'description' => 'laptop adalah perabotan elektronik yang berfungsi untuk membantu segala macam pekerjaan hingga bermain game bersama teman',
            'price' => 13500000,
            'photoPath' => 'laptop.jpg',
        ]);

        Product::create([
            'name' => 'kulkas',
            'category_id' => 1,
            'description' => 'kulkas adalah perabotan rumah tangga yang berfungsi untuk menyimpan makanan dan minuman. kulkas memiliki berbagai macam ukuran mulai dari 100 liter hingga 500 liter.',
            'price' => 5000000,
            'photoPath' => 'kulkas.jpg',
        ]);

        Product::create([
            'name' => 'Baju Anak',
            'category_id' => 2,
            'description' => 'Baju anak adalah baju yang di desain khusu untuk anak-anak dengan tampilan yang cantik dan menarik',
            'price' => 200000,
            'photoPath' => 'baju-anak.jpg',
        ]);

        Product::create([
            'name' => 'Baju Wanita',
            'category_id' => 2,
            'description' => 'Baju wanita adalah baju yang di desain khusu untuk wanita dengan tampil yang cantik dan menarik',
            'price' => 250000,
            'photoPath' => 'baju-wanita.jpg',
        ]);

        Product::create([
            'name' => 'Baju Pria',
            'category_id' => 2,
            'description' => 'Baju pria adalah baju yang di desain khusu untuk pria dengan tampil yang cantik dan menarik',
            'price' => 300000,
            'photoPath' => 'baju-pria.jpg',
        ]);

        Product::create([
            'name' => 'Baju Muslim',
            'category_id' => 2,
            'description' => 'Baju muslim adalah baju yang di desain khusu untuk muslim dengan tampil yang cantik dan menarik',
            'price' => 350000,
            'photoPath' => 'baju-muslim.jpg',
        ]);

        Product::create([
            'name' => 'Baju sekolah',
            'category_id' => 2,
            'description' => 'Baju sekolah adalah baju yang di desain khusu untuk anak sekolah agar dapat tampil rapih dan menarik',
            'price' => 500000,
            'photoPath' => 'baju-sekolah.jpg',
        ]);

        Product::create([
            'name' => 'Baju kerja',
            'category_id' => 2,
            'description' => 'Baju kerja adalah baju yang di desain khusu untuk pekerja agar dapat tampil rapih dan menarik',
            'price' => 1090000,
            'photoPath' => 'baju-kerja.jpg',
        ]);

        Product::create([
            'name' => 'Buku tulis',
            'category_id' => 3,
            'description' => 'Buku tulis awet, mudah untuk ditulis, dan tidak mudah rusak',
            'price' => 2000,
            'photoPath' => 'buku-tulis.jpg',
        ]);

        Product::create([
            'name' => 'Buku gambar',
            'category_id' => 3,
            'description' => 'Buku gambar adalah buku yang berisi gambar-gambar yang dapat digunakan untuk menggambar',
            'price' => 3000,
            'photoPath' => 'buku-gambar.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker mahal',
            'category_id' => 4,
            'description' => 'Skin ker mahal dapat membuat skin menjadi  sangat mahal',
            'price' => 5000000,
            'photoPath' => 'skin-ker.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker murah',
            'category_id' => 4,
            'description' => 'Skin ker murah dapat membuat skin menjadi  sangat murah',
            'price' => 1000,
            'photoPath' => 'skin-ker2.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker biasa',
            'category_id' => 4,
            'description' => 'Skin ker biasa dapat membuat skin menjadi  biasa',
            'price' => 5000,
            'photoPath' => 'skin-ker3.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker bagus',
            'category_id' => 4,
            'description' => 'Skin ker bagus dapat membuat skin menjadi  sangat bagus',
            'price' => 100000,
            'photoPath' => 'skin-ker4.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker jelek',
            'category_id' => 4,
            'description' => 'Skin ker jelek dapat membuat skin menjadi  sangat jelek',
            'price' => 10000,
            'photoPath' => 'skin-ker5.jpg',
        ]);

        Product::create([
            'name' => 'Skin ker keren',
            'category_id' => 4,
            'description' => 'Skin ker keren dapat membuat skin menjadi  sangat keren',
            'price' => 50000,
            'photoPath' => 'skin-ker6.jpg',
        ]);
    }
}
