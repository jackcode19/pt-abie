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
        ]);
    }
}
