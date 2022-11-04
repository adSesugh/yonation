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
        Domain::truncate();
        
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

        $newData = [
            'Accounting',
            'Aerospace',
            'Agriculture',
            'Anthropology',
            'Architecture',
            'Army',
            'Art History',
            'Biology',
            'Business Administration',
            'Chemical Engineering',
            'Chemistry',
            'Civil Defence',
            'Civil Engineering',
            'Communications',
            'Computer Engineering',
            'Computer Science',
            'Construction',
            'Criminal Justice',
            'Drama',
            'Economics',
            'Education',
            'Electrical Engineering',
            'English',
            'Film',
            'Finance',
            'Forestry',
            'Geography',
            'Graphic Design',
            'Health Care Adminstration',
            'History',
            'Hospitality & Tourism',
            'Industrial Engineering',
            'Information Technology',
            'Interior Design',
            'International Relations',
            'Journalism',
            'Management Information System',
            'Marketing',
            'Maths',
            'Mechanical Engineering',
            'Music',
            'Navy',
            'Nursing',
            'Nutrition',
            'Photography',
            'Physician Assistant',
            'Physically Challenged',
            'Physics',
            'Police',
            'Political Science',
            'Psychology',
            'Religion',
            'Sociology',
            'Spanish',
            'Other'
        ];

        foreach($newData as $item){
            Domain::create([
                'name'  =>  $item
            ]);
        }
    }
}
