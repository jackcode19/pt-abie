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
            'title' => 'PT ANAK BUNGSU INDONESIA ENERGI',
            'subtitle' => 'Pt Bungsu',
            'description_1' => 'PT. ANAK BUNGSU INDONESIA ENERGI adalah perusahaan yang bergerak dalam bidang
                                niaga Bahan Bakar Minyak (BBM) yang terdaftar secara resmi sebagai Agen dan Transportir
                                BBM Industri Pertamina. Kami juga perusahaan yang bergerak dalam bidang Kontruksi
                                Pembangunan yang dapat bersaing secara profesional baik dalam bidang jasa, alat dan
                                bahan kontruksi bangunan. Perusahaan kami memasarkan dan menjual BBM non subsidi
                                untuk sektor industri, transportasi, kontraktor, pertambangan, perkebunan, kapal dan lain
                                sebagainya. Memiliki tim yang sudah berpengalaman sebagai Mobile Bunker Agen / Agen
                                Insdutri Pertamina, kami berkomitmen dalam menjaga standar mutu produk dan
                                pelayanan pelanggan.',
            'description_2' => 'lorem ipsum dolor',
            'visi' => 'Menjadi salah satu Perusahaan Agen Pertamina yang kompeten dalam menjual dan mendisri
                        busikan Bahan Bakar MInyak (BBM) Industri, terdepan akan kualitas dan kuantitas dalam 
                        setiap produk dan pelayanannya.
                        ',
            'misi' => 'Melayani kebutuhan konsumen akan BBM industri di seluruh wilayah Indonesia dengan mem
                        pertahankan serta meningkatkan margin penjualan BBM.
                        ',
        ]);
    }
}
