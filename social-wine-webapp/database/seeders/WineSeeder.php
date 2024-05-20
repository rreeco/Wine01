<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wines')->delete();
        DB::table('wines')->insert([
        [
            'id' => '10000100001',
            'name' => 'KRUG 166',
            'uvaggio' => 'ZX3665225596',
            'annata' => '2010',
            'descrizione' => 'Una selezione di vini di riserva relativamente giovani, scelti con cura, costituisce il 42% della composizione. Tra questi spiccano per la loro struttura notevole i vini del 2000 e, per la loro generosa rotondità, quelli provenienti da Oger. I vini del 2006 provenienti da Verzy e Bouzy hanno conferito all\'assemblaggio il tocco finale, raggiungendo l\'armonia essenziale alla creazione di ciascuna edizione di Krug Grande Cuvée.',
            'categoria' => 'bollicine',
            'storia' => 'Krug Grande Cuvée 166ème Édition è stata creata a partire dalla vendemmia del 2010. In un anno caratterizzato da condizioni climatiche turbolente, le uve erano tuttavia ricche di belle promesse fino a quando il freddo ha messo fine alla stagione di crescita, portando con sé nuove preoccupazioni. La cura dedicata ai vigneti durante questo periodo difficile e l\'attenzione riservata da Krug alle proprietà uniche di ciascun appezzamento si sono dimostrate cruciali per garantire un raccolto sano, con uve perfettamente mature. Curiosamente, i vini Chardonnay della regione Côte de Blancs non hanno rivelato la loro freschezza abituale, ma l\'approccio originale della Maison alla realizzazione dello Champagne ha permesso di compensare ciò con la vivacità dei vini Meunier di quell\'anno, come quelli provenienti da Sainte-Gemme e Courmas.',
            'image_path' => 'image/krug166.png',
            'prezzo' => '250.25',
            'listino' => '375',
            'cantina_id' => '05321000100'
        ], 
        [
            'id' => 'V0000100002',
            'name' => 'KRUG 167',
            'uvaggio' => 'ZX3665225596',
            'annata' => '2010',
            'descrizione' => 'Per completare i vini di quest\'annata, la Maison fece ricorso alla sua ampia gamma di vini di riserva, effettuando tra questi un’accurata selezione che andò a costituire il 42% dell\'assemblaggio finale. Vari Meunier di diverse annate apportarono freschezza, mentre alcuni Chardonnay ed altri vini prodotti dalle vendemmie degli anni \'90 negli appezzamenti della Montagne de Reims conferirono l’ampiezza e la rotondità irrinunciabili per ogni edizione di Krug Grande Cuvée.  Krug Grande Cuvée è nata dal sogno di un uomo, Joseph Krug, di poter offrire il migliore Champagne al mondo, anno dopo anno, a prescindere dalle variazioni meteorologiche. Ogni anno, la Maison Krug rende omaggio al suo sogno con una nuova edizione di Krug Grande Cuvée: la maggiore espressione di eccellenza dello Champagne.',
            'categoria' => 'bollicine',
            'storia' => 'Krug Grande Cuvée 167ème Édition è stato realizzato a partire dalla vendemmia del 2011. Questa annata atipica fu divisa in due parti: un periodo di alte temperature durato fino agli inizi maggio, che portò alla fioritura con tre settimane di anticipo, seguito da un periodo caratterizzato da un clima freddo, umido e poco soleggiato.  Si temeva che l’uva potesse essere troppo matura, ma un’ondata di caldo di tre giorni interruppe la maturazione, portando inoltre alcune piogge che rinfrescarono i vigneti. A causa di queste condizioni climatiche insolite, la vendemmia dell’annata fu la seconda più precoce dal 1822. Alla fine, l’uva risultò in ottime condizioni, producendo vini dalla struttura sorprendente e dagli aromi straordinari. Se gli Chardonnay non rivelarono la loro freschezza abituale, l’annata diede vita a Pinot Noir gradevolmente equilibrati, in particolare quelli provenienti dagli appezzamenti di Mareuil sur Aÿ.',
            'image_path' => 'image/krug167.png',
            'prezzo' => '250,25',
            'listino' => '375',
            'cantina_id' => '05321000100'
        ],
        [
            'id' => 'V0000100003',
            'name' => 'Barone Pizzini Rosè',
            'uvaggio' => 'Chardonnay - Pinot Noir',
            'annata' => '2015',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/barone_pizzini_rose.png',
            'prezzo' => '32,5',
            'listino' => '38',
            'cantina_id' => '05321000622'
        ],
        [
            'id' => 'V0000100004',
            'name' => 'Barone Pizzini Animante',
            'uvaggio' => 'Chardonnay',
            'annata' => '2017',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/barone_pizzini_animante.png',
            'prezzo' => '26,5',
            'listino' => '31',
            'cantina_id' => '05321000622'
        ],
        [
            'id' => 'V0000100007',
            'name' => 'Philipponat Blanc the Noir',
            'uvaggio' => 'Pinot Noir',
            'annata' => '2015',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/philip_BtN.png',
            'prezzo' => '70',
            'listino' => '84,5',
            'cantina_id' => '05321000622'
        ],
        [
            'id' => 'V0000100005',
            'name' => 'Philipponat Blanc the Blanc',
            'uvaggio' => 'Chardonnay - Pinot Noir',
            'annata' => '2015',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/philip_BtB.png',
            'prezzo' => '58',
            'listino' => '71,50',
            'cantina_id' => '05321000622'
        ],
        [
            'id' => 'V0000100006',
            'name' => 'Philipponat Blanc the Blanc',
            'uvaggio' => 'Pinot Noir',
            'annata' => '2012',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/philip_BtB.png',
            'prezzo' => '70',
            'listino' => '86',
            'cantina_id' => '05321000100'
        ],
        [
            'id' => 'V0000100008',
            'name' => 'Philipponat Blanc the Noir',
            'uvaggio' => 'Pinot Noir',
            'annata' => '2012',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/philip_BtN.png',
            'prezzo' => '85',
            'listino' => '112',
            'cantina_id' => '05321000622'
        ],
        [
            'id' => 'V0000100009',
            'name' => 'Philipponat Blanc the Noir',
            'uvaggio' => 'Pinot Noir',
            'annata' => '2014',
            'descrizione' => 'Intenso, persistente, legnoso, liquirizia ultimo sentore',
            'categoria' => 'bollicine',
            'storia' => 'N/D',
            'image_path' => 'image/philip_BtN.png',
            'prezzo' => '75',
            'listino' => '88',
            'cantina_id' => '05321000100'
        ]
        ]);
    }
}
