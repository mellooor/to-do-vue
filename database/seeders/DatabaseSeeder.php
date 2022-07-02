<?php

namespace Database\Seeders;

use App\Models\ToDoItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ToDoItem::factory()->count(5)->create();
    }
}
