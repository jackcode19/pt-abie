<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name_company' => 'PT ANAK BUNGSU INDONESIA ENERGI',
            'logo' => 'company',
            'email' => 'ptabienergi@gmail.com',
            'phone' => '081254267654',
            'address' => 'Samolo Blok 4 No.3 Ciherang Kecamatan Karangtengah Kabupaten Cianjur - Jawa Barat 43281',
            'maps' => '!1m18!1m12!1m3!1d3961.73676966746!2d107.19799230000001!3d-6.801844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e685500282b378b%3A0xb2e6e147fc545a91!2sPT%20Anak%20Bungsu%20Indonesia%20Energi!5e0!3m2!1sid!2sid!4v1718434897229!5m2!1sid!2sid'
        ]);
    }
}
