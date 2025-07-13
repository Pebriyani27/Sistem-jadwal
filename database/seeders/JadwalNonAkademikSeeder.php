<?php

namespace Database\Seeders;

use App\Models\JadwalNonAkademik;
use Illuminate\Database\Seeder;

class JadwalNonAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwalNonAkademiks = [
            [
                'nama_kegiatan' => 'Rapat Koordinasi UKM',
                'tanggal' => '2024-12-10',
                'jam' => '14:00:00',
                'lokasi' => 'Aula Kampus',
                'penanggung_jawab' => 'Ketua BEM',
                'keterangan' => 'Rapat koordinasi antar UKM untuk persiapan acara kampus',
            ],
            [
                'nama_kegiatan' => 'Pelatihan Kepemimpinan',
                'tanggal' => '2024-12-12',
                'jam' => '09:00:00',
                'lokasi' => 'Ruang Seminar',
                'penanggung_jawab' => 'Wakil Ketua BEM',
                'keterangan' => 'Pelatihan kepemimpinan untuk pengurus UKM',
            ],
            [
                'nama_kegiatan' => 'Kunjungan Industri',
                'tanggal' => '2024-12-14',
                'jam' => '08:00:00',
                'lokasi' => 'PT. Teknologi Indonesia',
                'penanggung_jawab' => 'Kaprodi',
                'keterangan' => 'Kunjungan industri untuk mahasiswa semester akhir',
            ],
            [
                'nama_kegiatan' => 'Bakti Sosial',
                'tanggal' => '2024-12-16',
                'jam' => '07:00:00',
                'lokasi' => 'Panti Asuhan',
                'penanggung_jawab' => 'Ketua UKM Sosial',
                'keterangan' => 'Kegiatan bakti sosial mahasiswa',
            ],
            [
                'nama_kegiatan' => 'Olahraga Bersama',
                'tanggal' => '2024-12-18',
                'jam' => '16:00:00',
                'lokasi' => 'Lapangan Kampus',
                'penanggung_jawab' => 'Ketua UKM Olahraga',
                'keterangan' => 'Kegiatan olahraga bersama mahasiswa dan dosen',
            ],
        ];

        foreach ($jadwalNonAkademiks as $jadwal) {
            JadwalNonAkademik::updateOrCreate(
                [
                    'nama_kegiatan' => $jadwal['nama_kegiatan'],
                    'tanggal' => $jadwal['tanggal'],
                    'jam' => $jadwal['jam'],
                ],
                $jadwal
            );
        }
    }
} 