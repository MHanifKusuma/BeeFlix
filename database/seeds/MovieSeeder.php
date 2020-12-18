<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            //dramas
            ['genre_id' => '1', 'title' => 'One Day We\'ll Talk About Today', 'photo' => 'assets/NKCTHI.png', 'description' => 'Harbouring a deep secret, a seemingly happy family confronts the trauma of years past as a clash between generations threatens to separate them.', 'rating' => '4'],
            ['genre_id' => '1', 'title' => 'Crazy Rich Asians', 'photo' => 'assets/CrazyRichAsians.png', 'description' => 'Rachel, a professor, dates a man named Nick and looks forward to meeting his family. However, she is shaken up when she learns that Nick belongs to one of the richest families in the country.', 'rating' => '5'],
            ['genre_id' => '1', 'title' => 'The Haunting of Hill House', 'photo' => 'assets/HillHouse.png', 'description' => 'The Haunting of Hill House is a modern reimagining of Shirley Jackson\'s legendary novel of the same name, about five siblings who grew up in the most famous hauntedhouse in America. Now adults, they\'re reunited by the suicide of their youngest sister, which forces them to finally confront the ghosts of their own pasts... some which lurk in their minds... and some which may really be lurking in the shadows of the iconic Hill House.', 'rating' => '4'],
            ['genre_id' => '1', 'title' => 'Bird Box', 'photo' => 'assets/BirdBox.png', 'description' => 'When a mysterious force decimates the population, only one thing is certain -- if you see it, you die. The survivors must now avoid coming face to face with an entity that takes the form of their worst fears. Searching for hope and a new beginning, a woman and her children embark on a dangerous journey through the woods and down a river to find the one place that may offer sanctuary. To make it, they\'ll have to cover their eyes from the evil that chases them -- and complete the trip blindfolded.', 'rating' => '3'],
            ['genre_id' => '1', 'title' => 'Rudy Habibie', 'photo' => 'assets/RudyH.png', 'description' => 'This movie follows the story of the 3rd President of Indonesia, B.J. Habibie, young life when he was studying in the university in Germany, his struggle life as a student, and his love life before he eventually dates Ainun.', 'rating' => '5'],
            //kids
            ['genre_id' => '2', 'title' => 'How To Train Your Dragon', 'photo' => 'assets/HTTYD.png', 'description' => 'A hapless young Viking who aspires to hunt dragons becomes the unlikely friend of a young dragon himself, and learns there may be more to the creatures than he assumed.', 'rating' => '4'],
            ['genre_id' => '2', 'title' => 'Big Hero 6', 'photo' => 'assets/Big6.png', 'description' => 'The special bond develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada. They team up with a group of friends to form a band of high-tech heroes.', 'rating' => '4'],
            ['genre_id' => '2', 'title' => 'Cars 3', 'photo' => 'assets/Cars3.png', 'description' => 'Lighting McQueen, a legendary racer, is overcome by new generation racers. He sets out to prove that he is the best racer in the world with the help of Cruz Ramirez.', 'rating' => '5'],
            ['genre_id' => '2', 'title' => 'Frozen 2', 'photo' => 'assets/Frozen2.png', 'description' => 'Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery.', 'rating' => '5'],
            ['genre_id' => '2', 'title' => 'WALL-E', 'photo' => 'assets/WallE.png', 'description' => 'A machine responsible for cleaning a waste-covered Earth meets another robot and falls in love with her. Together, they set out on a journey that will alter the fate of mankind.', 'rating' => '4'],
            //tv shows
            ['genre_id' => '3', 'title' => 'Black Clover', 'photo' => 'assets/BlackClover.png', 'description' => 'Asta and Yuno were abandoned together at the same church and have been inseparable since. As children, they promised that they would compete against each other to see who would become the next Emperor Magus. However, as they grew up, some differences between them became plain. Yuno was a genius with magic, with amazing power and control, while Asta could not use magic at all, and tried to make up for his lack by training physically.', 'rating' => '4'],
            ['genre_id' => '3', 'title' => 'Dragons: Race to the Edge', 'photo' => 'assets/DragonsEdge.png', 'description' => 'Unlock the secrets of the Dragon Eye and come face to face with more dragons than anyone has ever imagined as Hiccup, Toothless and the Dragon Riders soar to the edge of adventure.', 'rating' => '5'],
            ['genre_id' => '3', 'title' => 'Warrior Nun', 'photo' => 'assets/WarriorNun.png', 'description' => 'After waking up in a morgue, an orphaned teen discovers she now possesses superpowers as the chosen Halo Bearer for a secret sect of demon-hunting nuns.', 'rating' => '4'],
            ['genre_id' => '3', 'title' => 'The Witcher', 'photo' => 'assets/Witcher.png', 'description' => 'The witcher Geralt, a mutated monster hunter, struggles to find his place in a world in which people often prove more wicked than beasts.', 'rating' => '4'],
            ['genre_id' => '3', 'title' => 'Spartacus', 'photo' => 'assets/Spartacus.png', 'description' => 'The life of Spartacus, the gladiator who lead a rebellion against the Romans. From his time as an ally of the Romans, to his betrayal and becoming a gladiator, to the rebellion he leads and its ultimate outcome.', 'rating' => '3'],
        ]);
    }
}
