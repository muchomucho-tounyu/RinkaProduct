<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;


class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::insert([
            ['name' => '新垣結衣'],
            ['name' => '有村架純'],
            ['name' => '綾野剛'],
            ['name' => '井上真央'],
            ['name' => '神木隆之介'],
            ['name' => '上白石萌音'],
            ['name' => '川口春奈'],
            ['name' => '高良健吾'],
            ['name' => '佐藤健'],
            ['name' => '菅田将暉'],
            ['name' => '堤真一'],
            ['name' => '星野源'],
            ['name' => '堀北真希'],
            ['name' => '松本潤'],
            ['name' => '宮﨑あおい'],
            ['name' => '目黒蓮'],
            ['name' => '吉岡秀隆'],
            ['name' => '手嶌葵'],
            ['name' => 'ASIAN KUNG-FU GENERATION'],
            ['name' => 'Awesome City Club'],
            ['name' => 'back number'],
            ['name' => 'BUMP OF CHICKEN'],
            ['name' => 'King Gnu'],
            ['name' => 'RADWIMPS'],
            ['name' => 'Vaundy'],
        ]);
        //
    }
}
