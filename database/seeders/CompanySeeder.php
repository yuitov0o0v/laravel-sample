<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create(attributes: [
            'name' => 'Company 1',
            'address' => 'Address 1',
        ]);
        Company::create(attributes: [
            'name' => 'Company 2',
            'address' => 'Address 2',
        ]);
    }
}
