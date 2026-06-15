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
            'tijdstip' => '2026-07-15 18:00:00',
            'location' => 'Antwerpen',
            'email_contactpersoon' => 'info@laravel-belgium.be',
        ]);

        \App\Models\Event::create([
            'title' => 'PHP Conference 2026',
            'organization' => 'PHP Belgium',
            'description' => 'De grootste PHP-conferentie van het jaar.',
            'tijdstip' => '2026-09-20 09:00:00',
            'location' => 'Brussel',
            'email_contactpersoon' => 'organisatie@phpbelgium.be',
        ]);

        \App\Models\Event::create([
            'title' => 'Workshop Tailwind CSS',
            'organization' => 'Webdesign Academy',
            'description' => 'Praktische workshop over Tailwind CSS voor beginners.',
            'tijdstip' => '2026-08-10 14:00:00',
            'location' => 'Gent',
            'email_contactpersoon' => 'info@webdesignacademy.be',
        ]);

        \App\Models\Event::create([
            'title' => 'Hackathon 2026',
            'organization' => 'Eigen beheer',
            'description' => '24-uurs hackathon voor innovators.',
            'tijdstip' => '2026-10-05 10:00:00',
            'location' => 'Leuven',
            'email_contactpersoon' => 'hackathon@techinc.com',
        ]);

        \App\Models\Event::create([
            'title' => 'Vue.js Amsterdam',
            'organization' => 'Vue.js Nederland',
            'description' => 'Internationale Vue.js conferentie.',
            'tijdstip' => '2026-11-12 09:30:00',
            'location' => 'Amsterdam',
            'email_contactpersoon' => 'info@vuejs.amsterdam',
        ]);

        \App\Models\Event::create([
            'title' => 'Symfony Live',
            'organization' => 'Symfony France',
            'description' => 'Conference rond het Symfony framework.',
            'tijdstip' => '2026-12-03 08:00:00',
            'location' => 'Parijs',
            'email_contactpersoon' => 'contact@symfony.live',
        ]);

        \App\Models\Event::create([
            'title' => 'AI & Tech Summit',
            'organization' => 'Digital Future',
            'description' => 'Top over artificiële intelligentie en technologie.',
            'tijdstip' => '2027-01-18 10:00:00',
            'location' => 'Berlijn',
            'email_contactpersoon' => 'info@digitalfuture.eu',
        ]);

        \App\Models\Event::create([
            'title' => 'DevOps Days',
            'organization' => 'DevOps Community',
            'description' => 'Twee dagen over CI/CD, Kubernetes en cloud.',
            'tijdstip' => '2027-02-22 09:00:00',
            'location' => 'Londen',
            'email_contactpersoon' => 'team@devopsdays.org',
        ]);

        \App\Models\Event::create([
            'title' => 'React Summit',
            'organization' => 'React Europa',
            'description' => 'Europese React.js summit.',
            'tijdstip' => '2027-03-14 10:00:00',
            'location' => 'Amsterdam',
            'email_contactpersoon' => 'info@reactsummit.eu',
        ]);

        \App\Models\Event::create([
            'title' => 'Cybersecurity Forum',
            'organization' => 'Secure IT',
            'description' => 'Forum over cybersecurity en privacy.',
            'tijdstip' => '2027-04-08 13:00:00',
            'location' => 'Den Haag',
            'email_contactpersoon' => 'info@secureit.nl',
        ]);
    }
}
