<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Song::insert([
            [
                'name' => '勿忘',
                'release_year' => 2021,
                'url' => 'https://www.youtube.com/watch?v=zkZARKFuzNQ&list=RDzkZARKFuzNQ&start_radio=1',
            ],
            [
                'name' => 'ソラニン',
                'release_year' => 2010,
                'url' => 'https://www.youtube.com/watch?v=XNURRmk8YrQ&list=RDXNURRmk8YrQ&start_radio=1',
            ],
            [
                'name' => '前前前世',
                'release_year' => 2016,
                'url' => 'https://www.youtube.com/watch?v=PDSkFeMVNFs&list=RDPDSkFeMVNFs&start_radio=1',
            ],
            [
                'name' => '虹',
                'release_year' => 2021,
                'url' => 'https://www.youtube.com/watch?v=hkBbUf4oGfA&list=RDhkBbUf4oGfA&start_radio=1',
            ],
            [
                'name' => 'くせのうた',
                'release_year' => 2010,
                'url' => 'https://www.youtube.com/watch?v=uYJS0O-9tIc&list=RDuYJS0O-9tIc&start_radio=1',
            ],
            [
                'name' => 'Mabataki',
                'release_year' => 2022,
                'url' => 'https://www.youtube.com/watch?v=6h6AQbdTkaE&list=RD6h6AQbdTkaE&start_radio=1',
            ],
            [
                'name' => '繋いだ手から',
                'release_year' => 2014,
                'url' => 'https://www.youtube.com/watch?v=YKZ5KbClxp8&list=RDYKZ5KbClxp8&start_radio=1',
            ],
            [
                'name' => '白日',
                'release_year' => 2019,
                'url' => 'https://www.youtube.com/watch?v=ony539T074w&list=RDony539T074w&start_radio=1',
            ],
            [
                'name' => '天体観測',
                'release_year' => 2001,
                'url' => 'https://www.youtube.com/watch?v=j7CDb610Bg0&list=RDj7CDb610Bg0&start_radio=1',
            ],
            [
                'name' => '明日への手紙',
                'release_year' => 2016,
                'url' => 'https://www.youtube.com/watch?v=ytQ3Hs3WjQ4&list=RDytQ3Hs3WjQ4&start_radio=1',
            ],
        ]);
        //
    }
}
