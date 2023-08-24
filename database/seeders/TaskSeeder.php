<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Grocery Shopping',
                'description' => 'Buy groceries for the week, including fruits, vegetables, and pantry staples',
                'due_date' => '2023-08-20',
                'status' => 'Not Started',
                'category_id' => '1',
            ],
            [
                'title' => 'Project Proposal',
                'description' => 'Draft a project proposal for the upcoming client presentation, outlining goals, scope, and timeline.',
                'due_date' => '2023-08-25',
                'status' => 'In Progress',
                'category_id' => '2',
            ],
            [
                'title' => 'Gym Workout',
                'description' => 'Complete a full-body workout session at the gym, focusing on cardio and strength training.',
                'due_date' => '2023-08-25',
                'status' => 'In Progress',
                'category_id' => '3',
            ],
        ];

        foreach ($tasks as $task) {
            DB::table('tasks')->insert($task);
        }
    }
}
