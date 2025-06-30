<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;


class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::create([
            [
                'name' => '花より男子',
                'release_year' => 2005,
                'overview' => '貧乏な女子高生・つくしが、超お金持ちの学園で出会った御曹司・道明寺とぶつかりながら恋に落ちていく物語。',
                'vote_average' => 4.3,
            ],
            [
                'name' => 'いつかこの恋を思い出してきっと泣いてしまう',
                'release_year' => 2016,
                'overview' => '介護士の音と運送業の練が、東京での生活の中で何度もすれ違いながらも惹かれ合っていく切ない純愛物語。',
                'vote_average' => 4.0,
            ],
            [
                'name' => '逃げるは恥だが役に立つ',
                'release_year' => 2016,
                'overview' => '無職のみくりと恋愛経験ゼロの平匡が“契約結婚”から始める不器用な同居ラブコメディ。',
                'vote_average' => 4.5,
            ],
            [
                'name' => 'MIU404',
                'release_year' => 2020,
                'overview' => '感情派の伊吹藍と理論派の志摩一未、対照的な刑事コンビが24時間以内に事件解決を目指すスピード感あふれる刑事ドラマ。',
                'vote_average' => 4.6,
            ],
            [
                'name' => 'silent',
                'release_year' => 2022,
                'overview' => '難聴を抱えた元恋人・佐倉想と再会した青羽紬が、声なき思いを通わせながら再び向き合う切ないラブストーリー。',
                'vote_average' => 4.6,
            ],
            [
                'name' => 'ALWAYS 三丁目の夕日',
                'release_year' => 2005,
                'overview' => '昭和33年の東京・夕日町三丁目で、茶川竜之介や鈴木則文たちが織りなす人情味あふれる温かい日常の物語。',
                'vote_average' => 4.4,
            ],
            [
                'name' => 'ソラニン',
                'release_year' => 2010,
                'overview' => '平凡なOL・井上芽衣子と音楽を夢見る恋人・種田成男が、自分たちの未来や夢に向き合っていく青春ラブストーリー。',
                'vote_average' => 4.1,
            ],
            [
                'name' => 'るろうに剣心',
                'release_year' => 2012,
                'overview' => '「人斬り抜刀斎」と恐れられた元維新志士・緋村剣心が、不殺の誓いを胸に、平和を守るため戦い続ける時代劇アクション。',
                'vote_average' => 4.5,
            ],
            [
                'name' => '君の名は。',
                'release_year' => 2016,
                'overview' => '東京に暮らす高校生・立花瀧と田舎町の少女・宮水三葉が、夢の中で入れ替わりながら時を越えて惹かれ合うファンタジーラブストーリー。',
                'vote_average' => 4.8,
            ],
            [
                'name' => '花束みたいな恋をした',
                'release_year' => 2021,
                'overview' => '映画や音楽の趣味がぴったりな山音麦と八谷絹が運命的に出会い、共に過ごした青春の日々と別れを描くリアルな恋愛物語。',
                'vote_average' => 4.3,
            ],


        ]);
        //
    }
}
