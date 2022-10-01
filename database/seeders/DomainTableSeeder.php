<?php

namespace Database\Seeders;

use App\Models\Domain;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Accounting, Auditing & Finance',
            'Admin & Office',
            'Building & Architecture',
            'Community & Social Services',
            'Consulting & Strategy',
            'Creative & Design',
            'Customer Service & Support',
            'Driver & Transport Services',
            'Engineering & Technology',
            'Estate Agents & Property Management',
            'Farming & Agriculture',
            'Food Services & Catering',
            'Health & Safety',
            'Hospitality & Leisure',
            'Human Resources',
            'Legal Services',
            'Management & Business Development',
            'Marketing & Communications',
            'Medical & Pharmaceutical',
            'Product & Project Management',
            'Quality Control & Assurance',
            'Research, Teaching & Training',
            'Sales',
            'Software & Data',
            'Supply Chain & Procurement',
            'Trades & Services'
        ];  

        foreach($data as $item){
            Domain::create([
                'name'  =>  $item
            ]);
        }
    }
}
