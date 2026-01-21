<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('skills')->insert([
            ['skill'=>'HTML', 'level'=>'Advanced'],
            ['skill'=>'CSS', 'level'=>'Advanced'],
            ['skill'=>'JS', 'level'=>'Advanced'],
            ['skill'=>'PHP', 'level'=>'Advanced'],
            ['skill'=>'Laravel', 'level'=>'Advanced'],
        ]);
    }
}
