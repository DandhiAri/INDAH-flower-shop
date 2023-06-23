<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Card;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'dandhiari',
            'username' => 'dandhiari22',
            'telp' => '082141794129',
            'alamat' => 'semboro',
            'password' => 'awokawok',
            'email' => 'dandhiari@null.com',
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'muhammad ari lasso',
            'username' => 'arilassoKW',
            'telp' => '08123456789',
            'alamat' => fake()->address,
            'password' => 'awokawok',
            'email' => 'arilasso@null.com',
            'role' => 'user',
        ]);
        
        Card::create([
            'name' => 'dandhi ari',
            'codeNumber' => '08123456789',
            'value' => 2000000
        ]);

        for($i = 1; $i <= 10; $i++){
            User::factory()->create([
              'name' => fake()->name,
              'username' => fake()->userName,
              'telp' => fake()->phoneNumber,
              'alamat' => fake()->address,
              'password' => Hash::make(fake()->word),
              'email' => fake()->safeEmail,
              'role' => fake()->randomElement(['admin','user']),
            ]);
        }
        
        // for($i = 1; $i <= 10; $i++){
        //     $number = fake()->numberBetween(5000,100000);
        //     $harga = round($number, -3);
        //     Product::create([
        //       'name' => fake()->word,
        //       'slug' => fake()->slug,
        //       'category' => fake()->numberBetween(1,3),
        //       'stock' => fake()->numberBetween(0,25),
        //       'image' => fake()->word().'.jpg',
        //       'desc' => fake()->paragraph,
        //       'size' => fake()->randomElement(['Kecil','Sedang','Besar']),
        //       'price' => $harga
        //     ]);
        // }
        DB::statement("
            INSERT INTO `products` (`id`, `name`, `slug`, `category`, `desc`, `image`, `stock`, `size`, `price`) VALUES
            (1, 'bunga boneka', 'akdakwwinndjnaanjwna', 123, 'ini merupakan bunga yang berpaduan dengan boneka yang disusun secara menarik\r\ndengan warna kontras', 'gambar1.jpg', 20, 'sedang ', 125000),
            (2, 'buket bunga uang', 'awdwhbvnsveusksjanda', 123, 'buket yang dimodel kipas seperti bentuk bunga', 'gambar2.jpg', 20, 'sedang', 100000),
            (3, 'buket bunga dengan cokelat', 'ufyisgfulshifhilahfavsdg', 123, 'Buket bunga dengan cokelat silver queen dan bengbeng yang dibentuk dengan bunga buatan dan disusun secara menarik.', 'Gambar3.jpg', 20, 'sedang', 155000),
            (4, 'Buket bunga variasi', 'jgduyasffhagfusafhkasfhaks', 123, 'Buket bunga variasi yang disusun secara menarik.', 'gambar4.jpg', 20, 'sedang', 125000),
            (5, 'Buket bunga dan boneka berwarna biru', 'daetsysrtssku', 123, 'Buket bunga dan boneka berwarna biru yang disusun secara menarik.', 'gambar5.jpg', 20, 'sedang', 100000),
            (6, 'Buket bunga dan boneka berwarna cokelat', 'hiytdiyiadguoad', 123, 'Buket bunga dan boneka berwarna cokelat yang disusun secara menarik.', 'gambar6.jpg', 30, 'sedang', 100000),
            (7, 'buket bunga dan wafer gery', 'jdryditdkufyffff', 123, 'Buket bunga dengan wafer gery yang disusun secara menarik.', 'gambar7.jpg', 20, 'sedang', 75000),
            (8, 'buket bunga wrapping cellophane biru', 'jgdugasdgahfjhaf', 123, 'buket bunga wrapping cellophane biru yang disusun secara menarik', 'gambar8.jpg', 20, 'sedang', 75000),
            (9, 'Bunga sun Flower', 'hduafydajlsfgwkafwdaf', 123, 'Bunga sun Flower yang menarik', 'gambar9.jpg', 20, 'besar', 150000),
            (10, 'bunga single flo', 'uuyr7tsiufsigfishvushuv', 123, 'bunga single flo yang menarik', 'gambar10.jpg', 20, 'kecil', 10000),
            (11, 'bunga sungames', 'hfuafkdagfiajdfdash', 123, 'bunga sungames yang disusun dengan menarik', 'gambar11.jpg', 10, 'besar', 150000),
            (12, 'Bunga sunrise', 'hgwidyowuasgriasgfw', 123, 'Bunga sunrise yang menarik', 'gambar12.jpg', 20, 'sedang', 130000),
            (13, 'Bunga mawar dengan uang Rp20.0000', 'hfuyduoqfdyifshadfhad', 123, 'Bunga mawar dengan uang Rp20.0000 yang menarik', 'gambar13.jpg', 20, 'besar', 150000),
            (14, 'Bunga mawar dengan uang Rp.100.000', 'uyiygyxgichgshgchdgshjdj', 123, 'Bunga mawar dengan uang Rp.100.000 yang menarik', 'gambar14.jpg', 20, 'besar', 1200000),
            (15, 'Bunga red rose', 'uigsgckdwhfjcgzhgwdca', 123, 'Bunga red rose bunga yang menarik', 'gambar15.jpg', 21, 'sedang', 120000),
            (16, 'bunga rose pink', 'higydyigdgasigfa', 123, 'bunga rose pink yang menarik', 'gambaar16.jpg', 21, 'sedang', 120000),
            (17, 'Bunga after stres', 'zhjgcysygfcsgcysd', 123, 'Bunga after stres yang menarik', 'gambar17.jpg', 123, 'sedang', 100000),
            (18, 'bunga singgle rose', 'gjkcgsfhsdfghksdfd', 123, 'bunga singgle rose yang menarik', 'gambar18.jpg', 20, 'kecil', 20000),
            (19, 'Bunga dengan uang Rp50.0000', 'shjfaghdvjavfjsafa', 123, 'Bunga dengan uang Rp50.0000 yang menarik', 'gambar19.jpg', 20, 'sedang', 500000),
            (20, 'Bunga G\'star', 'zhgaugrfsgfwdshfhwsgf', 123, 'Bunga G\'star yang menarik', 'gambar20.jpg', 20, 'sedang', 150000);
        ");
    }
}
