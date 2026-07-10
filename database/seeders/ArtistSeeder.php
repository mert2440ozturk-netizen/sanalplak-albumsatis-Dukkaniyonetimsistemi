<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        $artistGroups = [
            'Rock' => ['Led Zeppelin', 'Pink Floyd', 'The Rolling Stones', 'Queen', 'Nirvana', 'AC/DC', 'Guns N\' Roses', 'The Beatles', 'Metallica', 'Radiohead', 'Foo Fighters', 'Red Hot Chili Peppers'],
            'Jazz' => ['Miles Davis', 'John Coltrane', 'Duke Ellington', 'Louis Armstrong', 'Charlie Parker', 'Thelonious Monk', 'Ella Fitzgerald', 'Billie Holiday', 'Herbie Hancock', 'Dizzy Gillespie', 'Chet Baker', 'Nina Simone'],
            'Hip Hop' => ['Kendrick Lamar', 'Jay-Z', 'Nas', 'Eminem', 'Tupac Shakur', 'The Notorious B.I.G.', 'OutKast', 'A Tribe Called Quest', 'Wu-Tang Clan', 'Kanye West', 'Dr. Dre', 'Snoop Dogg'],
            'Klasik' => ['Ludwig van Beethoven', 'Wolfgang Amadeus Mozart', 'Johann Sebastian Bach', 'Frédéric Chopin', 'Pyotr Ilyich Tchaikovsky', 'Antonio Vivaldi', 'Franz Schubert', 'Johannes Brahms', 'Claude Debussy', 'Franz Liszt', 'Joseph Haydn', 'Georg Friedrich Handel'],
            'Elektronik' => ['Daft Punk', 'Kraftwerk', 'The Chemical Brothers', 'Aphex Twin', 'Deadmau5', 'Justice', 'Moby', 'Jean-Michel Jarre', 'Fatboy Slim', 'The Prodigy', 'Boards of Canada', 'Röyksopp'],
        ];

        $bioTemplates = [
            'Rock' => [
                '%s, rock müziğinin en etkili isimlerinden biri olarak kabul edilir; güçlü sahne performansı ve özgün sesiyle tanınır.',
                '%s, rock tarihinde iz bırakan isimlerden biridir; kariyeri boyunca türün sınırlarını zorlayan eserlere imza atmıştır.',
                '%s, rock müziğine kattığı özgün tarz ve söz yazarlığıyla nesiller boyu dinleyiciyi etkilemiştir.',
            ],
            'Jazz' => [
                '%s, caz müziğinin öncü isimlerinden biridir; doğaçlama yeteneği ve özgün üslubuyla tanınır.',
                '%s, caz tarihinin en saygın müzisyenlerinden biri olarak kabul edilir.',
                '%s, caz müziğine akıcı melodileri ve derin müzikalitesiyle önemli katkılarda bulunmuştur.',
            ],
            'Hip Hop' => [
                '%s, hip hop kültürünün öncü isimlerinden biridir; güçlü söz yazarlığı ve akışıyla tanınır.',
                '%s, hip hop tarihinde iz bırakan sanatçılardan biri olarak kabul edilir.',
                '%s, toplumsal mesajları müziğine ustalıkla yansıtan sanatçılardan biridir.',
            ],
            'Klasik' => [
                '%s, klasik müzik tarihinin en önemli bestecilerinden biri olarak kabul edilir; eserleri günümüzde hâlâ icra edilmektedir.',
                '%s, klasik müziğe kattığı yenilikçi kompozisyon anlayışıyla döneminin ötesine geçmiştir.',
                '%s, klasik repertuvarın vazgeçilmez isimlerinden biridir.',
            ],
            'Elektronik' => [
                '%s, elektronik müziğin öncülerinden biri olarak kabul edilir; yenilikçi prodüksiyon teknikleriyle tanınır.',
                '%s, elektronik müzik sahnesinde önemli bir iz bırakan sanatçılardan biridir.',
                '%s, dans müziği ve elektronik prodüksiyonu birleştiren özgün tarzıyla tanınır.',
            ],
        ];

        foreach ($artistGroups as $genreName => $names) {
            $templates = $bioTemplates[$genreName] ?? ['%s hakkında bilgi yakında eklenecek.'];

            foreach ($names as $name) {
                $bio = sprintf($templates[array_rand($templates)], $name);

                Artist::factory()->create([
                    'name' => $name,
                    'description' => $bio,
                ]);
            }
        }
    }
}
