<?php

namespace Database\Seeders;

use App\Models\UKM;
use Illuminate\Database\Seeder;

class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukms = [
            [
                'nama_ukm' => 'BEM (Badan Eksekutif Mahasiswa)',
                'pembina' => 'Dr. Ahmad',
            ],
            [
                'nama_ukm' => 'HIMTI (Himpunan Mahasiswa Teknik Informatika)',
                'pembina' => 'Dr. Budi',
            ],
            [
                'nama_ukm' => 'UKM Olahraga',
                'pembina' => 'Dr. Citra',
            ],
            [
                'nama_ukm' => 'UKM Seni dan Budaya',
                'pembina' => 'Dr. Deni',
            ],
            [
                'nama_ukm' => 'UKM Jurnalistik',
                'pembina' => 'Dr. Eko',
            ],
            [
                'nama_ukm' => 'UKM Fotografi',
                'pembina' => 'Dr. Fitri',
            ],
            [
                'nama_ukm' => 'UKM Robotik',
                'pembina' => 'Dr. Gita',
            ],
            [
                'nama_ukm' => 'UKM English Club',
                'pembina' => 'Dr. Hadi',
            ],
        ];

        foreach ($ukms as $ukm) {
            UKM::updateOrCreate(
                ['nama_ukm' => $ukm['nama_ukm']],
                $ukm
            );
        }
    }
} 