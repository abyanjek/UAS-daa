<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inovasi;
use App\Models\Pegawai;

class InovasiSeeder extends Seeder
{
    public function run()
    {
        Inovasi::truncate();

        $pegawais = Pegawai::all();

        $inovasis = [
            [
                'pegawai_id' => $pegawais->first()->id,
                'judul' => 'Sistem Manajemen Inovasi Baru',
                'deskripsi' => 'Pengembangan platform digital untuk melacak dan mengelola inovasi perusahaan',
                'status' => 'pending'
            ],
            [
                'pegawai_id' => $pegawais->last()->id,
                'judul' => 'Efisiensi Proses Kerja',
                'deskripsi' => 'Usulan perbaikan alur kerja untuk meningkatkan produktivitas',
                'status' => 'disetujui'
            ]
        ];

        foreach ($inovasis as $inovasiData) {
            Inovasi::create($inovasiData);
        }
    }
}