<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => '',
            'aboutme' => 'PT. ANAK BUNGSU INDONESIA ENERGI adalah perusahaan yang bergerak dalam bidang
niaga Bahan Bakar Minyak (BBM) yang terdaftar secara resmi sebagai Agen dan Transportir
BBM Industri Pertamina. Kami juga perusahaan yang bergerak dalam bidang Kontruksi
Pembangunan yang dapat bersaing secara profesional baik dalam bidang jasa, alat dan
bahan kontruksi bangunan. Perusahaan kami memasarkan dan menjual BBM non subsidi
untuk sektor industri, transportasi, kontraktor, pertambangan, perkebunan, kapal dan lain
sebagainya. Memiliki tim yang sudah berpengalaman sebagai Mobile Bunker Agen / Agen
Insdutri Pertamina, kami berkomitmen dalam menjaga standar mutu produk dan
pelayanan pelanggan.',
            'visi_misi' => '',
            'ourvalue' => '
Muda - Kolaborasi, keterbukaan, dan keinginan untuk belajar, yang memperkuat kreativitas dan inovasi.

Energik - Energi yang tak terbatas, dan semangat untuk menaklukkan tantangan.

Positif - kualitas, inovasi, keberagaman, integritas, pemberdayaan karyawan, keseimbangan kehidupan kerja dan pribadi, tanggung jawab sosial, transparansi, keadilan, ketahanan, kepuasan pelanggan, dan menciptakan dampak positif yang berkelanjutan dalam lingkungan.',
            'ouractivity' => 'Kami bekerja sama dengan seluruh instansi dan sektor yang terkait di dalam Bidang Niaga Bahan Bakar Minya (BBM) dan bidang konstruksi baik menjadi pemasok barang swasta maupun pemerintah degan penuh tanggung jawab dan saling menguntungkan'
        ]);
    }
}
