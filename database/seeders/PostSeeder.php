<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Post_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->delete();

        Post::factory()->create([
            'id' => '10000A00001',
            'title' => 'Versace n\altro flute',
            'sub_title' => 'Ammirate la classe dei nostri bicchieri',
            'content' => 'Moda - Vino - Bollicine - Inaugurazione ',
            'body' => 'Le informazioni usciranno prossimamente ;)',
            'seller_id' => '05321000622'
        ]);

        Post::factory()->insert([
            'id' => '10000A00002',
            'title' => 'A spasso con Daisy',
            'sub_title' => 'Amatemi per quello che sono',
            'content' => 'Amore - Vino - Bollicine - Bianchi - Macerazione ',
            'body' => 'Pronti alla festa del 15 Novembre?!?',
            'seller_id' => '05321000622'
        ]);
        Post::factory()->insert([
            'id' => '10000A00003',
            'title' => 'A spasso con Peach',
            'sub_title' => 'Amatemi per quello che sono',
            'content' => 'Frutta - Vino - Bianchi - Barrique - Festa',
            'body' => 'Estasiati dalla probabilità di incontrare Peach il 29 Novembre',
            'seller_id' => '05321000622'
        ]);
        Post::factory()->insert([
            'id' => '10000A00004',
            'title' => 'Imprugna il Passito',
            'sub_title' => 'Le prugne e il legame con il passito',
            'content' => 'Prugne - Passiti - Frutta - Esperienza',
            'body' => 'Prugne buone e salutari accompagnate dai classici vini da Dessert!!',
            'seller_id' => '25738496561'
        ]);
        Post::factory()->insert([
            'id' => '10000A00005',
            'title' => 'Appassito si diventa',
            'sub_title' => 'Seconda edizione Passito\'s Party',
            'content' => 'Bosco - Prugne - Passiti - Frutta - Esperienza',
            'body' => 'Essenza di frutta di stagione accompagnata dai classici da Dessert!!',
            'seller_id' => '25738496561'
        ]);
        Post::factory()->insert([
            'id' => '10000A00006',
            'title' => 'Amar Cord',
            'sub_title' => 'Selezioni di Rossi by Simo',
            'content' => 'Esperienza - Rossi - Montagna - Vino',
            'body' => 'Tanto rosso fa buon sangue! Le parole del\esperto Simone Casini',
            'seller_id' => '05321000100'
        ]);
    }
}
