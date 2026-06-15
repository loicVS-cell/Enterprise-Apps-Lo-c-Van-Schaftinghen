<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Event::create([
            'title' => 'Laravel Meetup',
            'organization' => 'Laravel Belgium',
            'description' => 'Een maandelijkse bijeenkomst voor Laravel-ontwikkelaars.',
            'date' => '2026-07-15',
            'location' => 'Antwerpen',
        ]);

        \App\Models\Event::create([
            'title' => 'PHP Conference 2026',
            'organization' => 'PHP Belgium',
            'description' => 'De grootste PHP-conferentie van het jaar.',
            'date' => '2026-09-20',
            'location' => 'Brussel',
        ]);

        \App\Models\Event::create([
            'title' => 'Workshop Tailwind CSS',
            'organization' => 'Webdesign Academy',
            'description' => 'Praktische workshop over Tailwind CSS voor beginners.',
            'date' => '2026-08-10',
            'location' => 'Gent',
        ]);

        \App\Models\Event::create([
            'title' => 'Hackathon 2026',
            'organization' => 'Tech Inc.',
            'description' => '24-uurs hackathon voor innovators.',
            'date' => '2026-10-05',
            'location' => 'Leuven',
        ]);

        \App\Models\Event::create([
            'title' => 'Vue.js Amsterdam',
            'organization' => 'Vue.js Nederland',
            'description' => 'Internationale Vue.js conferentie.',
            'date' => '2026-11-12',
            'location' => 'Amsterdam',
        ]);

        \App\Models\Event::create([
            'title' => 'Symfony Live',
            'organization' => 'Symfony France',
            'description' => 'Conference rond het Symfony framework.',
            'date' => '2026-12-03',
            'location' => 'Parijs',
        ]);

        \App\Models\Event::create([
            'title' => 'AI & Tech Summit',
            'organization' => 'Digital Future',
            'description' => 'Top over artificiële intelligentie en technologie.',
            'date' => '2027-01-18',
            'location' => 'Berlijn',
        ]);

        \App\Models\Event::create([
            'title' => 'DevOps Days',
            'organization' => 'DevOps Community',
            'description' => 'Twee dagen over CI/CD, Kubernetes en cloud.',
            'date' => '2027-02-22',
            'location' => 'Londen',
        ]);

        \App\Models\Event::create([
            'title' => 'React Summit',
            'organization' => 'React Europa',
            'description' => 'Europese React.js summit.',
            'date' => '2027-03-14',
            'location' => 'Amsterdam',
        ]);

        \App\Models\Event::create([
            'title' => 'Cybersecurity Forum',
            'organization' => 'Secure IT',
            'description' => 'Forum over cybersecurity en privacy.',
            'date' => '2027-04-08',
            'location' => 'Den Haag',
        ]);
    }
}
