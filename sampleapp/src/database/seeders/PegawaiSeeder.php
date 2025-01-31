<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        Pegawai::truncate();

        $pegawais = [
            [
                'nama' => 'John Doe',
                'email' => 'john.doe@example.com',
                'jabatan' => 'Manajer Inovasi'
            ],
            [
                'nama' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'jabatan' => 'Koordinator Pengembangan'
            ]
        ];

        foreach ($pegawais as $pegawaiData) {
            Pegawai::create($pegawaiData);
        }
    }
}