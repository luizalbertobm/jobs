<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(
            [
                'name' => 'Sales',
                'manager_id' => 1
            ]
        );
        Department::create(
            [
                'name' => 'Information Technology',
                'manager_id' => 2
            ]
        );
        Department::create(
            [
                'name' => 'Accounting',
                'manager_id' => 3
            ]
        );
        Department::create(
            [
                'name' => 'Financial',
                'manager_id' => 4
            ]
        );
        Department::create(
            [
                'name' => 'Logistics',
                'manager_id' => 5
            ]
        );
    }
}
