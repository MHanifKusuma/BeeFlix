<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            ['movie_id' => '1', 'episode' => '1', 'title' => 'One Day We\'ll Talk About Today'],
            ['movie_id' => '2', 'episode' => '1', 'title' => 'Crazy Rich Asians'],
            ['movie_id' => '4', 'episode' => '1', 'title' => 'Bird Box'],
            ['movie_id' => '5', 'episode' => '1', 'title' => 'Rudy Habibie'],
            ['movie_id' => '6', 'episode' => '1', 'title' => 'How to Train Your Dragon'],
            ['movie_id' => '7', 'episode' => '1', 'title' => 'Big Hero 6'],
            ['movie_id' => '8', 'episode' => '1', 'title' => 'Cars 3'],
            ['movie_id' => '9', 'episode' => '1', 'title' => 'Frozen 2'],
            ['movie_id' => '10', 'episode' => '1', 'title' => 'WALL-E'],

            ['movie_id' => '3', 'episode' => '1', 'title' => 'Steven Sees a Ghost'],
            ['movie_id' => '3', 'episode' => '2', 'title' => 'Open Casket'],
            ['movie_id' => '3', 'episode' => '3', 'title' => 'Touch'],
            ['movie_id' => '3', 'episode' => '4', 'title' => 'The Twin Thing'],
            ['movie_id' => '3', 'episode' => '5', 'title' => 'The Bent-Neck Lady'],
            ['movie_id' => '3', 'episode' => '6', 'title' => 'Two Storms'],
            ['movie_id' => '3', 'episode' => '7', 'title' => 'Eulogy'],
            ['movie_id' => '3', 'episode' => '8', 'title' => 'Witness Marks'],
            ['movie_id' => '3', 'episode' => '9', 'title' => 'Screaming Meemies'],
            ['movie_id' => '3', 'episode' => '10', 'title' => 'Silence Lay Steadily'],

            ['movie_id' => '11', 'episode' => '1', 'title' => 'Asta and Yuno'],
            ['movie_id' => '11', 'episode' => '2', 'title' => 'A Young Man\'s Vow'],
            ['movie_id' => '11', 'episode' => '3', 'title' => 'To the Royal Capital!'],
            ['movie_id' => '11', 'episode' => '4', 'title' => 'The Magic Knights Entrance Exam'],
            ['movie_id' => '11', 'episode' => '5', 'title' => 'The Road to the Wizard King'],
            ['movie_id' => '11', 'episode' => '6', 'title' => 'The Black Bulls'],
            ['movie_id' => '11', 'episode' => '7', 'title' => 'The Other New Recruit'],
            ['movie_id' => '11', 'episode' => '8', 'title' => 'Go! Go! My First Mission'],
            ['movie_id' => '11', 'episode' => '9', 'title' => 'Beasts'],
            ['movie_id' => '11', 'episode' => '10', 'title' => 'Guardians'],

            ['movie_id' => '12', 'episode' => '1', 'title' => 'Eye of thr Beholder, Part 1'],
            ['movie_id' => '12', 'episode' => '2', 'title' => 'Eye of thr Beholder, Part 2'],
            ['movie_id' => '12', 'episode' => '3', 'title' => 'Imperfect Harmony'],
            ['movie_id' => '12', 'episode' => '4', 'title' => 'When Darkness Falls'],
            ['movie_id' => '12', 'episode' => '5', 'title' => 'Big Man on berk'],
            ['movie_id' => '12', 'episode' => '6', 'title' => 'Gone Gustav Gone'],
            ['movie_id' => '12', 'episode' => '7', 'title' => 'Reign of Fireworms'],
            ['movie_id' => '12', 'episode' => '8', 'title' => 'Crushing It'],
            ['movie_id' => '12', 'episode' => '9', 'title' => 'Quake, Rattle and Roll'],
            ['movie_id' => '12', 'episode' => '10', 'title' => 'Have Dragon Will Travel, Part 1'],
            ['movie_id' => '12', 'episode' => '11', 'title' => 'Have Dragon Will Travel, Part 2'],
            ['movie_id' => '12', 'episode' => '12', 'title' => 'The Next Big Sting'],
            ['movie_id' => '12', 'episode' => '13', 'title' => 'Total Nightmare'],

            ['movie_id' => '13', 'episode' => '1', 'title' => 'Psalm 46:5'],
            ['movie_id' => '13', 'episode' => '2', 'title' => 'Proverbs 31:25'],
            ['movie_id' => '13', 'episode' => '3', 'title' => 'Ephesians 6:11'],
            ['movie_id' => '13', 'episode' => '4', 'title' => 'Ecclesiasticus 26:9-10'],
            ['movie_id' => '13', 'episode' => '5', 'title' => 'Matthew 7:13'],
            ['movie_id' => '13', 'episode' => '6', 'title' => 'Isaiah 30:20-21'],
            ['movie_id' => '13', 'episode' => '7', 'title' => 'Ephesians 4:22-24'],
            ['movie_id' => '13', 'episode' => '8', 'title' => 'Proverbs 14:1'],
            ['movie_id' => '13', 'episode' => '9', 'title' => '2 Corinthians 10:4'],
            ['movie_id' => '13', 'episode' => '10', 'title' => 'Revelation 2:10'],

            ['movie_id' => '14', 'episode' => '1', 'title' => 'The End\'s Beginning'],
            ['movie_id' => '14', 'episode' => '2', 'title' => 'Four Marks'],
            ['movie_id' => '14', 'episode' => '3', 'title' => 'Betrayer Moon'],
            ['movie_id' => '14', 'episode' => '4', 'title' => 'Of Banquets, Bastards and Burials'],
            ['movie_id' => '14', 'episode' => '5', 'title' => 'Bottled Appetites'],
            ['movie_id' => '14', 'episode' => '6', 'title' => 'Rare Species'],
            ['movie_id' => '14', 'episode' => '7', 'title' => 'Before a Fall'],
            ['movie_id' => '14', 'episode' => '8', 'title' => 'Much More'],

            ['movie_id' => '15', 'episode' => '1', 'title' => 'The Red Serpent'],
            ['movie_id' => '15', 'episode' => '2', 'title' => 'Sacramentum Gladiatorum'],
            ['movie_id' => '15', 'episode' => '3', 'title' => 'Legends'],
            ['movie_id' => '15', 'episode' => '4', 'title' => 'The Thing in the Pit'],
            ['movie_id' => '15', 'episode' => '5', 'title' => 'Shadow Games'],
            ['movie_id' => '15', 'episode' => '6', 'title' => 'Delicate Things'],
            ['movie_id' => '15', 'episode' => '7', 'title' => 'Great and Unfortunate Things'],
            ['movie_id' => '15', 'episode' => '8', 'title' => 'Mark of the Brotherhood'],
            ['movie_id' => '15', 'episode' => '9', 'title' => 'Whore'],
            ['movie_id' => '15', 'episode' => '10', 'title' => 'Party Favors'],
            ['movie_id' => '15', 'episode' => '11', 'title' => 'Old Wounds'],
            ['movie_id' => '15', 'episode' => '12', 'title' => 'Revelations'],
            ['movie_id' => '15', 'episode' => '13', 'title' => 'Kill Them All']
        ]);
    }
}
