<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'nama' => 'Seminar Teknologi Informasi',
                'tanggal' => '2024-12-15',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Workshop Programming',
                'tanggal' => '2024-12-20',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Kompetisi Coding',
                'tanggal' => '2024-12-25',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Pelatihan UI/UX Design',
                'tanggal' => '2024-12-30',
                'status' => 'aktif',
            ],
            [
                'nama' => 'Webinar Cyber Security',
                'tanggal' => '2025-01-05',
                'status' => 'aktif',
            ],
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(
                [
                    'nama' => $event['nama'],
                    'tanggal' => $event['tanggal'],
                ],
                $event
            );
        }
    }
} 