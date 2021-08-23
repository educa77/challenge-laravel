<?php

use App\Detail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $description = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed omnis praesentium adipisci consequatur molestias? Optio quam delectus maiores vitae aliquid. Minus dolorem excepturi, voluptate alias nobis omnis laudantium accusamus magni.';
        $base_uri = '/uploads/';

        Detail::create([ //id 1
            'name' => 'Etios',
            'version' => 'Hatchback',
            'slogan' => 'Tu primer Toyota, mejor que nunca',
            'description' => $description,
            'image' => $base_uri . 'etios_photo_291b9af227.png',
            'model_id' => 1
        ]);

        Detail::create([ //id 2
            'name' => 'Yaris',
            'version' => 'Hatchback',
            'slogan' => 'Despierta nuevas sensaciones',
            'description' => $description,
            'image' => $base_uri . 'yaris_photo_e005d7d524.png',
            'model_id' => 2
        ]);

        Detail::create([ //id 3
            'name' => 'Corolla',
            'version' => '',
            'slogan' => 'Nuevo Corolla 2020, siempre adelante',
            'description' => $description,
            'image' => $base_uri . 'corolla_photo_efb32fd3fe.png',
            'model_id' => 3
        ]);

        Detail::create([ //id 4
            'name' => 'Prius',
            'version' => 'Hybrid',
            'slogan' => 'La evolución de los vehículos híbridos',
            'description' => $description,
            'image' => $base_uri . 'prius_photo_0b86f77b98.png',
            'model_id' => 4
        ]);

        Detail::create([ //id 5
            'name' => 'Camry',
            'version' => '',
            'slogan' => 'Una presencia que se destaca',
            'description' => $description,
            'image' => $base_uri . 'camry_photo_0d20633737.png',
            'model_id' => 5
        ]);

        Detail::create([ //id 6
            'name' => 'Toyota 86',
            'version' => '',
            'slogan' => 'Pasión a primera vista',
            'description' => $description,
            'image' => $base_uri . 'toyota-86.png',
            'model_id' => 6
        ]);

        Detail::create([ //id 7
            'name' => 'Innova',
            'version' => '',
            'slogan' => 'Familiarizate con la nueva Innova',
            'description' => $description,
            'image' => $base_uri . 'innova@2x.png',
            'model_id' => 7
        ]);

        Detail::create([ //id 8
            'name' => 'SW4',
            'version' => '',
            'slogan' => 'Tu primer Toyota, mejor que nunca',
            'description' => $description,
            'image' => $base_uri . 'sw4_photo_991b142541.png',
            'model_id' => 8
        ]);

        Detail::create([ //id 9
            'name' => 'RAV4',
            'version' => '',
            'slogan' => 'Más tecnología, más experiencias',
            'description' => $description,
            'image' => $base_uri . 'rav4_photo_9c57b31906.png',
            'model_id' => 9
        ]);

        Detail::create([ //id 10
            'name' => 'Land Cruiser Prado',
            'version' => '',
            'slogan' => 'La leyenda continúa, La aventura recién empieza',
            'description' => $description,
            'image' => $base_uri . 'prado.png',
            'model_id' => 10
        ]);

        Detail::create([ //id 11
            'name' => 'Land Cruiser 200',
            'version' => '',
            'slogan' => 'La personificación de la fuerza y el lujo',
            'description' => $description,
            'image' => $base_uri . 'ch4_thumb_52549c748d.png',
            'model_id' => 11
        ]);

        Detail::create([ //id 12
            'name' => 'Hilux',
            'version' => 'DR/SR',
            'slogan' => 'Preparada para cualquier desafío',
            'description' => $description,
            'image' => $base_uri . 'hilux_photo_db8b78ecba.png',
            'model_id' => 12
        ]);
    }
}